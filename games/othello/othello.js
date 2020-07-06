"use strict"

const WeightData = [
    [ 30, -12,  0, -1, -1,  0, -12,  30],
    [-12, -15, -3, -3, -3, -3, -15, -12],
    [  0,  -3,  0, -1, -1,  0,  -3,   0],
    [ -1,  -3, -1, -1, -1, -1,  -3,  -1],
    [ -1,  -3, -1, -1, -1, -1,  -3,  -1],
    [  0,  -3,  0, -1, -1,  0,  -3,   0],
    [-12, -15, -3, -3, -3, -3, -15, -12],
    [ 30, -12,  0, -1, -1,  0, -12,  30],
];

const BLACK = 1;
const WHITE = 2;
let data=[];
let turn; // 1: BLACK 2: WHITE
let playStateOn = 0; //0: not play / 1: on play
let comStateOn; //0: com inactive / 1: com active

function init(){
    const divOff = document.getElementsByClassName("off");
    for(let k=0; k<divOff.length; k++){
        divOff[k].onclick = setCfg;
    }


    const board = document.getElementById("board");
    let tr = document.createElement("tr");
    let td = document.createElement("td");

    for(let i=0; i<8; i++){
        tr = document.createElement("tr");
        data[i] = [0,0,0,0,0,0,0,0];
        //console.log(`data[${i}]${data[i]}`);

        for(let j=0; j<8; j++){
            td = document.createElement("td");
            td.className = "cell";
            td.id = "cell" + i + j;
            td.onclick = clicked;
            tr.appendChild(td);
        }
        board.appendChild(tr);
    }
}

function startBtn(){
    playStateOn = 1;
    closeCfg();
    readCfg();
}

function readCfg(){
    //設定を確認
    //初期配置の設定を確認
    let initialPut;
    //console.log(document.getElementById("parallel").className);
    //console.log(document.getElementById("closs").className);

    if(document.getElementById("parallel").className=="off"){
        initialPut="closs"
    } else {
        initialPut="parallel"
    }

    //初期配置
    if(initialPut=="closs"){
        put(3,3, BLACK);
        put(4,4, BLACK);
        put(3,4, WHITE);
        put(4,3, WHITE);
    } else {
        put(3,3, BLACK);
        put(4,4, WHITE);
        put(3,4, BLACK);
        put(4,3, WHITE);
    }

    //対戦相手の設定を確認
    let opponent;
    if(document.getElementById("com").className=="off"){
        opponent="human"
    } else {
        opponent="com"
    }

    //com levelの設定確認
    let comLv;
    if(document.getElementById("random").className=="on"){
        comLv=0;
    } else if(document.getElementById("lvOne").className=="on"){
        comLv=1;
    } else if(document.getElementById("lvTwo").className=="on"){
        comLv=2;
    } else if(document.getElementById("lvThree").className=="on"){
        comLv=3;
    }


    //対戦相手情報＋com level情報をHTMLへ出力
    if(opponent=="human"){
        document.getElementById("blackPlayer").textContent = "Player1";
        document.getElementById("whitePlayer").textContent = "Player2";
        comStateOn=0;
    } else {
        document.getElementById("blackPlayer").textContent = "あなた";
        document.getElementById("whitePlayer").textContent = `COM`;
        document.getElementById("comLv").textContent = `Lv.${comLv}`;
        comStateOn=1;
    }

    //Turnの設定確認
    if(opponent=="com"){
        if(document.getElementById("first").className=="on"){
            turn = WHITE;
            document.getElementById("blackTurn").textContent = "先手";
            document.getElementById("whiteTurn").textContent = "後手";
        } else {
            turn = BLACK;
            document.getElementById("blackTurn").textContent = "後手";
            document.getElementById("whiteTurn").textContent = "先手";
        }
    } else {
        turn = WHITE;
        document.getElementById("blackTurn").textContent = "先手";
        document.getElementById("whiteTurn").textContent = "後手";
    }

    update();

}

function update(){
    let numWhite = 0;
    let numBlack = 0;

    for(let x=0; x<8; x++){
        for(let y=0; y<8; y++){
            if(data[x][y]==WHITE){
                numWhite++;
            }
            if(data[x][y]==BLACK){
                numBlack++;
            }
        }
    }
    document.getElementById("numBlack").textContent = numBlack;
    document.getElementById("numWhite").textContent = numWhite;

    const blackFlip = canFlip(BLACK);
    const whiteFlip = canFlip(WHITE);

    if(numWhite + numBlack == 64 || (!blackFlip&&!whiteFlip)){
        showMessage("ゲームオーバー");
    } else if (!blackFlip){
        showMessage("黒スキップ");
        turn = WHITE;
    } else if (!whiteFlip){
        showMessage("白スキップ");
        turn = BLACK;
    } else {
        if(turn==BLACK){
            turn=WHITE;
        }else if(turn==WHITE){
            turn=BLACK;
        }
    }

    if(turn==WHITE&&comStateOn==1){
        setTimeout(think, 2000);
    }
}

function showMessage(str){
    document.getElementById("message").textContent = str;
    setTimeout(function(){
        document.getElementById("message").textContent = "";
    }, 2000);
}

function clicked(elem){
    if(turn==WHITE&&comStateOn==1){
        return;
    }

    const id = elem.target.id;
    console.log(`セルがクリックされました。idは${id}`);
    console.log(`turnは,${turn}`)

    const row = parseInt(id.charAt(4));
    const column = parseInt(id.charAt(5));
    let flipColor;
    //console.log(`${id.charAt(4)}`);
    //console.log(`${id.charAt(5)}`);

    if(comStateOn==1){
        flipColor=BLACK;
    }else{
        if(turn==BLACK){
            flipColor = BLACK;
        } else {
            flipColor = WHITE;
        }
    }

    const flipped = getFlipCells(row, column, flipColor);
    //console.log(`flipped${flipped}`);

    if(flipped.length > 0){
        for(let i=0; i<flipped.length; i++){
            put(flipped[i][0], flipped[i][1], flipColor);
        }
        put(row, column, flipColor);
        update();
    }
}

function put(row, column, color){
    const elem = document.getElementById("cell"+row+column);
    elem.textContent = "●";
    elem.className = "cell " + (color==BLACK?"black":"white");
    data[row][column]=color;
}

function think(){
    let highScore = -1000;
    let px = -1;
    let py = -1;

    for(let x=0; x<8; x++){
        for(let y=0; y<8; y++){
            var tmpData = copyData();
            var flipped = getFlipCells(x,y,WHITE);
            if(flipped.length>0){
                for(var i=0; i<flipped.length; i++){
                    var p = flipped[i][0];
                    var q = flipped[i][1];
                    tmpData[p][q] = WHITE;
                    tmpData[x][y] = WHITE;
                }

                var score = calcWeightData(tmpData);
                if(score>highScore){
                    highScore = score;
                    px=x, py=y;
                }
            }
        }
    }

    if(px>=0 && py>=0){
        var flipped = getFlipCells(px,py,WHITE);
        if(flipped.length>0){
            for(var k=0; k<flipped.length; k++){
                put(flipped[k][0], flipped[k][1], WHITE);
            }
        }
        put(px,py,WHITE);
    }
    update();
}

function calcWeightData(tmpData){
    let score = 0;
    for(let x=0; x<8; x++){
        for(let y=0; y<8; y++){
            if(tmpData[x][y]==WHITE){
                score+=WeightData[x][y];
            }
        }
    }
    //console.log(`スコア計算したました。結果は${score}`);
    return score;
}

function copyData(){
    var tmpData = [];
    for(var x=0; x<8; x++){
        tmpData[x]=[];
        for(var y=0; y<8; y++){
            tmpData[x][y]=data[x][y];
        }
    }
    return tmpData;
}

function canFlip(color){
    for(var x=0; x<8; x++){
        for(var y=0; y<8; y++){
            var flipped = getFlipCells(x,y,color);
            if(flipped.length>0){
                return true;
            }
        }
    }
    return false;
}

function getFlipCells(i,j,color){
    if(data[i][j]==BLACK||data[i][j]==WHITE){
        return [];
    }

    const dirs = [[-1,-1],[0,-1],[1,-1],[-1,0],[1,0],[-1,1],[0,1],[1,1]];
    let result = [];

    //console.log(`xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx`);
    for(var p=0; p<dirs.length; p++){
        var flipped = getFlipCellsOneDir(i,j,dirs[p][0],dirs[p][1],color);
        result = result.concat(flipped);
    }
    return result;
}

function getFlipCellsOneDir(i,j,dx,dy,color){
    var x = i + dx;
    var y = j + dy;
    var flipped = [];
    //console.log(`i:${i}/j:${j}/dx:${dx}/dy:${dy}/color:${color}`);
    //dataOut();
    

    if(x<0||y<0||x>7||y>7||data[x][y]==color||data[x][y]==0){
        return [];
    }
    flipped.push([x,y]);

    while(true){
        x+=dx;
        y+=dy;
        if(x<0||y<0||x>7||y>7||data[x][y]==0){
            return [];
        }
        if(data[x][y]==color){
            return flipped;
        } else {
            flipped.push([x,y]);
        }
    }
}

function dataOut(){
    for(let i=0; i<8; i++){
        console.log(`data[${i}]${data[i]}`);
    }
}

function openCfg(){
    const div = document.getElementById("config");
    div.style.display = "block";
}

function closeCfg(){
    const div = document.getElementById("config");
    div.style.display = "none";
}

function setCfg(elem){

    const id = elem.target.id;
    const div = document.getElementById(id);
    div.className = "on";
    div.onclick = "";

    if(id=="parallel"){
        switchOff("closs");
    } else if(id=="closs"){
        switchOff("parallel");
    }

    if(id=="com"){
        switchOff("human");
    } else if(id=="human") {
        switchOff("com");
    }

    if(id=="random"){
        switchOff("lvOne"); switchOff("lvTwo"); switchOff("lvThree");
    } else if (id=="lvOne"){
        switchOff("random"); switchOff("lvTwo"); switchOff("lvThree");
    } else if (id=="lvTwo"){
        switchOff("random"); switchOff("lvOne"); switchOff("lvThree");
    } else if(id=="lvThree"){
        switchOff("random"); switchOff("lvOne"); switchOff("lvTwo");
    }

    if(id=="first"){
        switchOff("second");
    } else if(id=="second"){
        switchOff("first");
    }
}

function switchOff(id){
    document.getElementById(id).className = "off";
    document.getElementById(id).onclick = setCfg;
}


//紙吹雪
let screen_w = window.innerWidth;
let screen_h = window.innerHeight;

const KAMI_MAX = 400;
const COLORS = ["#f55","#55f","#5c5","#fa5","#5af"];

function rand(min, max){
    return(Math.floor(Math.random()*(max-min+1)+min));
}

class Kami {
    constructor(){
        this.elm = document.createElement("div");
        document.body.appendChild(this.elm);

        this.sty = this.elm.style;

        this.x = rand(0, screen_w);
        this.y = rand(0, screen_h);

        this.vx = rand(-10 ,10);
        this.vy = rand(  5 ,10);

        this.ang = 0;
        this.spd = rand(15,40);

        this.rX = rand(0,10)/10;
        this.rY = rand(0,10)/10;
        this.rZ = rand(0,10)/10;

        this.sty.position = "fixed";

        this.sty.width = "10px";
        this.sty.height = "5px";
        this.sty.backgroundColor = COLORS[rand(0,COLORS.length)];



    }

    update(){
        this.x+=this.vx;
        this.y+=this.vy;

        if(this.y>=screen_h){
            this.x = rand(0, screen_w);
            this.y = -20;
        }

        this.ang += this.spd;
        this.sty.left = this.x +"px";
        this.sty.top  = this.y +"px";
        this.sty.transform ="rotate3D("
                                + this.rX + "," + this.rY + ","
                                + this.rZ + "," + this.ang + "deg)";

    }
}


let kami = [];
for(let i=0; i<KAMI_MAX; i++){
    kami.push(new Kami());
}



setInterval(mainLoop, 1000/20);

function mainLoop(){
    for(let i=0; i<KAMI_MAX; i++){
        kami[i].update();
    }
}

