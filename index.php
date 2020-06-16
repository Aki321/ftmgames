<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Free Time games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <div class="container-small">
                <a href="index.php" class="headA"><span class="far fa-clock icon"></span> Free Time Games</a>

                <button type="button" class="headC">
                    <span class="fa fa-bars" title="MENU"></span>
                </button>
            </div>

            <nav class="top_menu">
                <ul>
                    <li class="top">
                        <a href="index.php"><span class="fas fa-home"></span> Top</a>
                    </li>
                    <li class="games">
                        <a href=".listable"><span class="fas fa-gamepad"></span> Games</a>
                    </li>
                    <li class="about">
                        <a href=".aboutcont"><span class="fas fa-book"></span> About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <!-- スライドさせる画像の設定 -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="./games/slidepuzzle/index.php"><img class="slideImg d-block" src="img/slidepuzzle15.PNG" alt="第1スライド"></a>
                </div><!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="./games/flipcard/index.php"><img class="slideImg d-block" src="img/fripcads.PNG" alt="第2スライド"></a>
                </div><!-- /.carousel-item -->
            </div><!-- /.carousel-inner -->
            <!-- スライドコントロールの設定 -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">前へ</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">次へ</span>
            </a>
        </div><!-- /.carousel -->
    </section>

    <div class="listable">
        <div class="container">
            <div class="wrapIcon">
                <span class="fas fa-gamepad icon"></span><span class="indexTxt"> Games</span>
            </div>
            <div class="row">
                <div class="p-4 col-12 col-sm-6 col-md-4">
                    <a href="./games/slidepuzzle/index.php"><img class="shadow-sm p-3 mb-5 bg-white rounded mx-auto d-block img-fluid" alt="slide_01" src="img/slidepuzzle15.PNG" /></a>
                </div>
                <div class="p-4 col-12 col-sm-6 col-md-4">
                    <a href="./games/flipcard/index.php"><img class="shadow-sm p-3 mb-5 bg-white rounded mx-auto d-block img-fluid" alt="slide_02" src="img/fripcads.PNG" /></a>
                </div>
            </div>
        </div>
    </div>

    <div class="blogs">
        <div class="container">
            <div class="wrapIcon">
                <span class="fas fa-blog icon"></span><span class="indexTxt"> Blog</span>
            </div>
            <div class="allblogs row mt-5">
                <div class="col-12 col-md-6">
                    <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
                        <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
                        <div class="col-9 mt-auto mb-auto"><a href="./blog/jsBeginnersGuide.php"><p class="h4 mb-0">JavaScript ~Hello World~</p></a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
                        <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
                        <div class="col-9 mt-auto mb-auto"><a href="./blog/jsArray.php"><p class="h4 mb-0">JavaScript ~配列~</p></a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
                        <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
                        <div class="col-9 mt-auto mb-auto"><a href="./blog/jsForeach.php"><p class="h4 mb-0">JavaScript ~forEach~</p></a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
                        <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
                        <div class="col-9 mt-auto mb-auto"><a href="./blog/jsFor.php"><p class="h4 mb-0">JavaScript ~for~</p></a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
                        <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
                        <div class="col-9 mt-auto mb-auto"><a href="./blog/jsMapMethod.php"><p class="h4 mb-0">JavaScript ~mapメソッド~</p></a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
                        <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
                        <div class="col-9 mt-auto mb-auto"><a href="./blog/jsObject.php"><p class="h4 mb-0">JavaScript ~Mapオブジェクト~</p></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutcont">
        <div class="container">
            <div class="photo"></div>
            <div class="text">
                <h2><span class="fas fa-book"></span> About</h2>
                <p>Free Time Gamesは、無料のゲームですので、暇な時間つぶしにご利用ください。<br><br>このサイトは、30代でWEB系エンジニアを目指している管理人(Aki)がプログラムの勉強も兼ねて制作しています。<br><br>サイトの立ち上げは2020年5月より開始しました。<br>まだまだ、至らない点があると思いますがよろしくお願いします。</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footA">
                <h2>Free Time Games</h2>
                <a href="https://ftmgames.net">https://ftmgames.net</a>
            </div>
            <nav class="footB">
                <div>
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Search</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Contents</h3>
                    <ul>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Developer</a></li>
                    </ul>
                </div>
            </nav>
            <div class="footC">
                © Free Time games. All rights reserved.
            </div>
            <nav class="footD"></nav>

        </div>

    </footer>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>