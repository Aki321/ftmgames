<?php
session_name("FTMG");
session_start();

if (!isset($_SESSION["visited"])) {
    $_SESSION["visited"] = 1;
} else {
    $visited = $_SESSION["visited"];
    $visited++;
    $_SESSION["visited"] = $visited;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>神経衰弱ゲーム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 

    <script>
        'use strict';
        Array.prototype.shuffle = function() {
            var i = this.length;
            while (i) {
                var j = Math.floor(Math.random() * i);
                var tmp = this[--i];
                this[i] = this[j];
                this[j] = tmp;
            }
            return this;
        }

        //Global variable ================
        let timer = NaN, score = 0, flipTimer, prevCard, startTime, elapsed;
        const num_row = 4,  num_col = 4;
        const score_max = (num_row * num_col) / 2;

        //読み込み時の実行関数==============
        function init() {
            var table = document.getElementById("table");
            var cards = [];
            for (var i = 0; i <= score_max -1; i++) {
                cards.push(i);
                cards.push(i);
            }

            cards.shuffle();

            for (var i = 0; i < num_row; i++) {
                var tr = document.createElement("tr");
                for (var j = 0; j < num_col; j++) {
                    var td = document.createElement("td");
                    td.className = "back Front" + cards[i * num_row + j];
                    td.number = cards[i * num_row + j];
                    td.onclick = flip;
                    tr.appendChild(td);
                }
                table.appendChild(tr);
            }
        }

        //スタートボタンをクリックした時の処理
        function stbtn_click() {
            var btn = document.getElementById("stbtn");

            if (btn.textContent === "START") {
                startTime = new Date();
                timer = setInterval(tick, 1000);
                btn.textContent = 'Shuffle';
            } else {
                spbtn_click();
            }
        }

        //更新====================
        function spbtn_click() {
            location.reload();
        }

        //経過時間測定用タイマー
        function tick() {
            var now = new Date();
            elapsed = Math.floor((now.getTime() - startTime.getTime()) / 1000);
            document.getElementById("time").textContent = elapsed;
        }

        //カード裏返し(カードをクリックした時の処理)
        function flip(e) {
            var src = e.srcElement;
            if (document.getElementById("stbtn").textContent === "START" || flipTimer || src.textContent != "") {
                return;
            }

            var num = src.number;
            src.className = "Front" + num;
            src.textContent = num;

            if (prevCard == null) {
                prevCard = src;
                return;
            }

            if (prevCard.number == num) {
                if (++score == score_max) {
                    clearInterval(timer);

                    $.ajax({
                        type: 'POST',
                        url: 'bestCtrl.php',
                        data: {
                            "time": elapsed
                        },
                        success: function(data) {}
                    });
                    document.getElementById("clrResult").textContent = " 秒 CLEAR!🎉";
                }
                prevCard = null;
                clearTimeout(flipTimer);

            } else {
                flipTimer = setTimeout(function() {
                    src.className = "back";
                    src.textContent = "";
                    prevCard.className = "back";
                    prevCard.textContent = "";
                    prevCard = null;
                    flipTimer = NaN;
                }, 1000);
            }
        }
    </script>
</head>

<body onload="init()">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="./index.php"><span class="fas fa-gamepad"></span> 神経衰弱♠</a>
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
        <div class="container mt-5">
            <h2>
                <?php
                if (!isset($_SESSION["bestTime"])) {
                    echo "👑Best Time : - 秒";
                } else {
                    echo "👑Best Time : ";
                    echo $_SESSION["bestTime"];
                    echo " 秒";
                }
                ?>
            </h2>
            <p class="playTime">⏱Time：<span id="time">0</span><span id="clrResult"> 秒</span></p>
            <table id="table"></table>
            <section id="ctrl">
                <div class="container">
                    <div class="blackBtn"><a id="stbtn" onclick="stbtn_click()">START</a></div>
                    <div class="redBtn"><a id="spbtn" onclick="spbtn_click()">STOP</a></div>
                </div>
                <a class="otherGm" href="../index.php"><button><span class="fas fa-play-circle"> 他のゲームで遊ぶ</span></button></a>
            </section>
        </div>
    </main>
    <footer>
    </footer>
    <script src="../../js/lib/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>