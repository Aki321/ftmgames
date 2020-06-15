<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Free Time games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script>
        $(function () {
            $(".headC").click(function () {
                $(".top_menu").slideToggle();
            });
        });
    </script>

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
            <!--
            <ul class="slick01">
                <li><a href="./slidepuzzle/index.php"><img alt="slide_01" src="img/slidepuzzle15.PNG" /></a></li>
                <li><a href="./flipcard/index.php"><img alt="slide_02" src="img/fripcads.PNG" /></a></li>
                <li><img alt="slide_03" src="img/demo3.jpg" /></li>
            </ul>
            -->

            <div id="example-2" class="carousel slide" data-ride="carousel" style="width:400px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slidepuzzle15.PNG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="img/slidepuzzle15.PNG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="img/slidepuzzle15.PNG" alt="Third slide">
    </div>
    <a class="carousel-control-prev" href="#example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    </section>

    <div class="listable">
        <div class="container">
            <div class="wrapIcon">
                <span class="fas fa-gamepad icon"></span><span class="indexTxt"> Games</span>
            </div>
            <div class="row">
                <div class="p-1 col-12 col-sm-6 col-md-4">
                    <a href="./games/slidepuzzle/index.php"><p>スライドパズル⓯</p><img class="mx-auto d-block img-fluid" alt="slide_01" src="img/slidepuzzle15.PNG" /></a>
                </div>
                <div class="p-1 col-12 col-sm-6 col-md-4">
                    <a href="./games/flipcard/index.php"><p>神経衰弱</p><img class="mx-auto d-block img-fluid" alt="slide_02" src="img/fripcads.PNG" /></a>
                </div>
                <div class="p-1 col-12 col-sm-6 col-md-4">
                    <p>15puzzle</p><img class="mx-auto d-block img-fluid" alt="slide_03" src="img/demo3.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div class="blogs">
        <div class="container">
            <div class="wrapIcon">
                <span class="fas fa-blog icon"></span><span class="indexTxt"> Blog</span>
            </div>
            <div class="allblogs">
                <div>
                    <a href="./blog/jsBeginnersGuide.php"><p>JavaScript~入門~</p></a>
                </div>
                <div>
                    <a href="./blog/jsArray.php"><p>JavaScript~配列~</p></a>
                </div>
                <div>
                    <a href="./blog/jsForeach.php"><p>JavaScript~forEach~</p></a>
                </div>
                <div>
                    <a href="./blog/jsFor.php"><p>JavaScript~for~</p></a>
                </div>
                <div>
                    <a href="./blog/jsMapMethod.php"><p>JavaScript~mapメソッド~</p></a>
                </div>
                <div>
                    <a href="./blog/jsMapObject.php"><p>JavaScript~Mapオブジェクト~</p></a>
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



    <!--<script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>-->

</body>

</html>