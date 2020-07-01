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
    <title>Othello</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="othello.js"></script>
    <?php include($_SERVER['DOCUMENT_ROOT'] .'/html/gtag.html');?>
</head>

<body onload="init()">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="./"><span class="fas fa-gamepad"></span> Othello</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="../../"><span class="fas fa-home"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../#listable"><span class="fas fa-gamepad"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../#blogs"><span class="fas fa-blog icon"></span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../../#aboutcont"><span class="fas fa-book"></span></span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <main>
        <div class="container">
            <h2>
                黒(あなた):<span id="numBlack"></span>枚
                白(AI):<span id="numWhite"></span>枚
            </h2>
            <table id="board"></table>
            <h2 id="message"></h2>
        </div>
    </main>
    <footer>
    </footer>
    <script src="../../js/lib/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>