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
    <title>Reversi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php include($_SERVER['DOCUMENT_ROOT'] .'/html/gtag.html');?>
</head>

<body onload="init()">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="./"><span class="fas fa-gamepad"></span> Reversi</a>
    </nav>
</header>

    <main>
        <div id="endScreen">
            <div class="container subScreen">
                <div id="judgement">Win</div>
                <div id="endScreenBtn">
                    <div id="replay" class="endBtn" onclick="replayBtn()">もう一回</div>
                    <div id="setChange" class="endBtn" onclick="setChange()">設定変更</div>
                    <a id="otherGame" class="endBtn" href="../../">他のゲームで遊ぶ</a>
                </div>
            </div>
        </div>
        <div id="config">
            <div class="container subScreen">
                <!--<div class="navCfg"><a onclick="closeCfg()"><span class="fas fa-times-circle"></span></a></div>-->
                <div class="wrapSet">
                    <div class="wrap_item">
                        <h3><i class="fas fa-chess-board"></i> 初期配置</h3>
                        <div class="wrap_choise initialPut">
                            <div id="parallel" class="off">平行</div>
                            <div id="closs" class="on">クロス</div>
                        </div>
                    </div>
                    <div class="wrap_item">
                        <h3><i class="fas fa-user-friends"></i> 対戦相手</h3>
                        <div class="wrap_choise opponent">
                            <div id="com" class="on">COM</div>
                            <div id="human" class="off">人間</div>
                        </div>
                    </div>
                    <div class="wrap_item disableItem">
                        <h3><i class="fab fa-connectdevelop"></i> COMレベル</h3>
                        <div class="wrap_choise level">
                            <div id="random" class="off">Lv.0</div>
                            <div id="lvOne" class="on">Lv.1</div>
                            <div id="lvTwo" class="off">Lv.2</div>
                            <div id="lvThree" class="off">Lv.3</div>
                        </div>
                    </div>
                    <div class="wrap_item disableItem">
                        <h3><i class="fas fa-people-arrows"></i> 番手</h3>
                        <div class="wrap_choise turn">
                            <div id="first" class="on">先手</div>
                            <div id="second" class="off">後手</div>
                        </div>
                    </div>
                    <div>
                        <button onclick="startBtn()" class="btn-gradient-radius">Start</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="wrapInfo">
                <div class="info">
                    <div class="cellWhite">
                        <div id="whiteTurn"></div>
                        <div id="whitePlayer"></div>
                        <div id="comLv" class="comLvPlace"></div>
                    </div>
                    <span id="numWhite"></span>
                    <span class="unit">枚</span>
                </div>
            </div>
            <table id="board"></table>
            <div class="wrapInfo">
                <div class="info">
                    <div class="cellBlack">
                        <div id="blackTurn"></div>
                        <div id="blackPlayer"></div>
                        <div class="comLvPlace"></div>
                    </div>
                    <span id="numBlack"></span>
                    <span class="unit">枚</span>
                </div>
                <!--<div class="info disableSP">
                    <div class="cellWhite">
                        <div id="whiteTurn"></div>
                        <div id="whitePlayer"></div>
                        <div id="comLv" class="comLvPlace"></div>
                    </div>
                    <span id="numWhite"></span>
                    <span class="unit">枚</span>
                </div>-->
            </div>
            <h2 id="message"></h2>
        </div>
    </main>
    <footer>
    </footer>
    <script type="text/javascript" src="style.js"></script>
    <script type="text/javascript" src="othello.js"></script>  
    <script src="../../js/lib/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>