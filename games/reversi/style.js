"use strict"

window.onresize = winSizeMon;

function winSizeMon() {
    let elemCont = document.getElementsByClassName("container");
    let elemContWidth = elemCont[2].clientWidth;
    let oneCellWidth = (elemContWidth-10-7)/8;
    //console.log(elemContWidth);

    let elmeCells = document.getElementsByClassName("cell");
    let lengthCells = elmeCells.length;

    if(elemContWidth<768){
        for(let i=0; i<lengthCells; i++){
            elmeCells[i].style.width    =`${oneCellWidth}px`;
            elmeCells[i].style.height   =`${oneCellWidth}px`;
            elmeCells[i].style.fontSize =`${oneCellWidth-5}px`;
        }
    }

    let innerHeight = window.innerHeight;
    let bodyHeight = document.body.clientHeight;
    let maskHeight;

    if(innerHight>bodyHight){
        maskHeight = innerHeight;
    }else{
        maskHeight = bodyHeight;
    }
    document.getElementById("config").style.height = `${maskHeight+10}px`;
    document.getElementById("endScreen").style.height = `${maskHeight+10}px`;
}