<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Free Time games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/commonFooter.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100757614-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-100757614-4');
    </script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="./"><span class="far fa-clock icon"></span> Free Time Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="./"><span class="fas fa-home"></span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./#listable"><span class="fas fa-gamepad"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./#blogs"><span class="fas fa-blog icon"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./#aboutcont"><span class="fas fa-book"></span></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <!-- スライドさせる画像の設定 -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="/games/slidepuzzle/"><img class="slideImg d-block" src="/img/slidepuzzle15.PNG" alt="第1スライド"></a>
                </div><!-- /.carousel-item -->
                <div class="carousel-item">
                    <a href="/games/flipcard/"><img class="slideImg d-block" src="/img/fripcads.PNG" alt="第2スライド"></a>
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

    <div id="listable">
        <div class="container">
            <div class="wrapIcon">
                <span class="fas fa-gamepad icon"></span><span class="indexTxt"> Games</span>
            </div>
            <div class="row">
                <div class="p-4 col-12 col-sm-6 col-md-4">
                    <a href="/games/slidepuzzle/"><img class="shadow-sm p-3 mb-5 bg-white rounded mx-auto d-block img-fluid" alt="slide_01" src="/img/slidepuzzle15.PNG" /></a>
                </div>
                <div class="p-4 col-12 col-sm-6 col-md-4">
                    <a href="/games/flipcard/"><img class="shadow-sm p-3 mb-5 bg-white rounded mx-auto d-block img-fluid" alt="slide_02" src="/img/fripcads.PNG" /></a>
                </div>
            </div>
        </div>
    </div>

    <div id="blogs">
        <div class="container">
            <div class="wrapIcon">
                <span class="fas fa-blog icon"></span><span class="indexTxt"> Blog</span>
            </div>
            <div class="allblogs row mt-5">
<?php
$bloglist = glob('./blog/*');
foreach($bloglist as $content){
    if ($content!="./blog/css"){
        $filename = $content.'/index.php';
        $file = fopen($filename, 'r');
        while (!feof($file)) {
            $row = fgets($file);
            
            if(preg_match('/\$title = "(.+)"/',$row, $match)){
                $title = $match[1];
                break;
            }
        }

        while (!feof($file)) {
            $row = fgets($file);
            
            if(preg_match('/<time itemprop="datePublished">([0-9]{4}\/[0-9]{2}\/[0-9]{2})/',$row, $match)){
                $datePub = $match[1];
                break;
            }
        }

        //while (!feof($file)) {
        //    $row = fgets($file);
        //    
        //    if(preg_match('/<time itemprop="dateModified">(.+)</',$row, $match)){
        //        $dateMod = $match[1];
        //        break;
        //    }
        //}
        fclose($file);

?>
    <div class="col-12 col-md-6">
        <div class="row col-12 bg-white rounded p-3 pl-2 ml-auto mr-auto shadow-sm mb-2">
            <div class="p-2 col-3"><i class="fab fa-js-square"></i></div>
            <div class="col-9 mt-auto mb-auto pr-0 pl-0">
                <div class="col-12 pl-0 pr-0"><a href="<?php echo $content; ?>"><p class="h4 mb-0"><?php echo $title; $title=""; ?></p></a></div>
                <div class="col-12 mt-3 dateInfo pr-0">
                    <i class="fas fa-pencil-alt"></i><?php echo $datePub; ?>
                    <!--<i class="fas fa-wrench"></i>--><?php //echo $dateMod; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
?>

            </div><!--class=allblogs-->
        </div><!--class=container-->
    </div><!--id=blogs-->

    <section id="aboutcont">
        <div class="container">
            <div class="photo"></div>
            <div class="text">
                <h2><span class="fas fa-book"></span> About</h2>
                <p>Free Time Gamesは、無料のゲームですので、暇な時間つぶしにご利用ください。<br><br>このサイトは、30代でWEB系エンジニアを目指している管理人(Aki)がプログラムの勉強も兼ねて制作しています。<br><br>サイトの立ち上げは2020年5月より開始しました。<br>まだまだ、至らない点があると思いますがよろしくお願いします。</p>
            </div>
        </div>
    </section>

    <?php include($_SERVER['DOCUMENT_ROOT'] .'/html/commonFooter.html'); ?>

    <script src="/js/lib/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>