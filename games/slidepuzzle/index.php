<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Slide Puzzle 15</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    


    <script>
        "use strict";

        //Timer===================================================
        var timerId = NaN, count = 0;

        function stbtn_click() {
            var btn = document.getElementById("stbtn");

            document.getElementById("clr_s").innerText = " [s]";

            if (btn.textContent === "START") {
                timerId = setInterval(tick, 1000);

                for (var i = 0; i < 1000; i++) {
                    click({ srcElement: { index: Math.floor(Math.random() * 16) } })
                }

                btn.innerHTML = '<span class="fas fa-play"></span><br>Re-START';
            } else {
                clearInterval(timerId);
                timerId = NaN, count = 0;
                document.getElementById("counter").textContent = count;
                timerId = setInterval(tick, 1000);
                for (var i = 0; i < 1000; i++) {
                    click({ srcElement: { index: Math.floor(Math.random() * 16) } })
                }
            }
        }

        function tick() {
            count++;
            document.getElementById("counter").textContent = count;
        }
        //========================================================

        //更新====================
        function spbtn_click() {
            location.reload();
        }

        //広域変数
        var tiles = [];

        //クッキーのチェック関数
        function checkCookie() {
            var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)puzzle_rec\s*\=\s*([^;]*).*$)|^.*$/, "$1");
            console.log("現在のクッキーは" + document.cookie);
            console.log('"' + cookieValue + '"');
            return cookieValue;
        }

        //初期関数
        function init() {
            //クッキー処理==========================================
            //クッキーに最短クリア時間があるか確認
            //あれば表示
            //無ければ空欄(-)
            var cookieValue = checkCookie();
            if (cookieValue === "") {
                document.getElementById("fastest").textContent = " - ";
            } else {
                document.getElementById("fastest").textContent = cookieValue;
            }
            /*
                function deleteCookie(){
                document.cookie = "mycookie=; expires=0";
                console.log(document.cookie);
            }
            */
            //=====================================================

            var table = document.getElementById("table");

            for (var i = 0; i < 4; i++) {
                var tr = document.createElement("tr");


                for (var j = 0; j < 4; j++) {
                    var td = document.createElement("td");
                    var index = i * 4 + j;
                    td.className = "tile";
                    td.index = index;
                    if (index === 15) {
                        td.value = 0;
                    } else {
                        td.value = index + 1;
                    }

                    if (index === 15) {
                        td.textContent = "";
                    } else {
                        td.textContent = index + 1;
                    }

                    td.onclick = click;
                    tr.appendChild(td);
                    tiles.push(td);
                }
                table.appendChild(tr);
            }

            var trEle = document.querySelectorAll('#table tr');
            trEle[3].querySelectorAll("td")[3].style.visibility = 'hidden';
        }

        function click(e) {
            var i = e.srcElement.index;
            /*var deb = tiles[i-4].value;*/
            //console.log("クリックされました。iの値は" + i);
            /*console.log("条件式1の値は"+deb);*/


            if (i - 4 >= 0 && tiles[i - 4].value == 0) {
                swap(i, i - 4);
            } else if (i + 4 < 16 && tiles[i + 4].value == 0) {
                swap(i, i + 4);
            } else if (i % 4 != 0 && tiles[i - 1].value == 0) {
                swap(i, i - 1);
            } else if (i % 4 != 3 && tiles[i + 1].value == 0) {
                swap(i, i + 1);
            }

            //クリアしているかのチェック
            if (document.getElementById("stbtn").textContent === "Re-START") {
                if (tiles[0].value == 1 && tiles[1].value == 2 && tiles[2].value == 3 && tiles[3].value == 4 &&
                    tiles[4].value == 5 && tiles[5].value == 6 && tiles[6].value == 7 && tiles[7].value == 8 &&
                    tiles[8].value == 9 && tiles[9].value == 10 && tiles[10].value == 11 && tiles[11].value == 12 &&
                    tiles[12].value == 13 && tiles[13].value == 14 && tiles[14].value == 15 && tiles[15].value == 0
                ) {
                    var clearTime = document.getElementById("counter").textContent;
                    document.getElementById("counter").textContent = clearTime;
                    clearInterval(timerId);
                    timerId = NaN, count = 0;
                    //document.getElementById("stbtn").textContent = "START";
                    document.getElementById("stbtn").innerHTML = '<span class="fas fa-play"></span><br>START';
                    document.getElementById("clr_s").innerText = " [s] CLEAR !!!";

                    //最短記録をクッキーに登録する
                    //クリアタイムと今までの最速タイムを比較する
                    var cookieValue = checkCookie();
                    console.log("クリアしました。cookieValueは" + cookieValue);

                    console.log("cookieValueは" + cookieValue);
                    console.log("clearTimeは" + clearTime);

                    if (cookieValue === "") {
                        document.cookie = "puzzle_rec=" + clearTime;
                    } else if (cookieValue > clearTime) {
                        document.cookie = "puzzle_rec=" + clearTime;
                        document.getElementById("fastest").textContent = "Record time : " + clearTime + " [sec]";
                        //console.log(document.cookie);
                    }

                    var cookieValue = checkCookie();
                    if (cookieValue === "") {
                        document.getElementById("fastest").textContent = " - ";
                    } else {
                        document.getElementById("fastest").textContent = cookieValue;
                    }
                }
            }

        }

        function swap(i, j) {
            var tmp = tiles[i].value;
            console.log("swap実行します。tmpの値は" + tmp);
            console.log("iの値は" + i);
            console.log("jの値は" + j);
            tiles[i].textContent = tiles[j].textContent;
            tiles[i].value = tiles[j].value;
            tiles[j].textContent = tmp;
            tiles[j].value = tmp;

            //数字のないパネルを消す====================================
            //何番目のtrか検出する
            if (i < 4) {
                var row = 0;
            } else if (i < 8) {
                var row = 1;
            } else if (i < 12) {
                var row = 2;
            } else {
                var row = 3;
            }

            //何番目のtdか検出する
            if (row === 0) {
                var column = i;
            } else {
                var column = i % 4;
            }

            console.log("rowの値は" + row);
            console.log("columnの値は" + column);


            var trEle = document.querySelectorAll('#table tr');
            console.log(trEle[row].querySelectorAll("td")[column]);
            trEle[row].querySelectorAll("td")[column].style.visibility = 'hidden';

            //消されていたパネルを復活する===============================
            //何番目のtrか検出する
            if (j < 4) {
                var row = 0;
            } else if (j < 8) {
                var row = 1;
            } else if (j < 12) {
                var row = 2;
            } else {
                var row = 3;
            }

            //何番目のtdか検出する
            if (row === 0) {
                var column = j;
            } else {
                var column = j % 4;
            }

            var trEle = document.querySelectorAll('#table tr');
            console.log(trEle[row].querySelectorAll("td")[column]);
            trEle[row].querySelectorAll("td")[column].style.visibility = 'visible';

        }
    </script>
</head>

<body onload="init()">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="./index.php"><span class="fas fa-gamepad"></span> Slide Puzzle⓯</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="../../top/index.php"><span class="fas fa-home"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../top/index.php#listable"><span class="fas fa-gamepad"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../top/index.php#blogs"><span class="fas fa-blog icon"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../top/index.php#aboutcont"><span class="fas fa-book"></span></span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <main>
        <section id="info_time">
            <div class="container">
                <div class="best_cont">
                    <span class="far fa-star"> Best Time : </span>
                    <span id="fastest"></span>
                    <span> [s]</span>
                </div>
                <div class="time_cont">
                    <span class="fas fa-hourglass-half"> Time : </span>
                    <span id="counter">0</span>
                    <span id="clr_s"> [s]</span>
                </div>
            </div>
        </section>

        <section id="puzzle">
            <div class="container">
                <div class="waku">
                    <table id="table"></table>
                </div>
            </div>
        </section>

        <section id="ctrl">
            <div class="container">
                <a id="stbtn" onclick="stbtn_click()"><span class="fas fa-play"></span><br>START</a>
                <a id="spbtn" onclick="spbtn_click()"><span class="fas fa-stop"></span><br>STOP</a>
                <br><a href="../../top/index.php"><button><span class="fas fa-play-circle"> 他のゲームで遊ぶ</span></button></a>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="../../js/lib/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>