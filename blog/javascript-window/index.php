<?php
$title = "JavaScript Window";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $title; ?></title>
<?php include('../../html/blogHead.html'); ?>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
<?php include('../../html/blogHeader.html'); ?>
    <main>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/27 <i class="fas fa-wrench"></i>- <i class="fas fa-user-edit"></i>Aki</div>
        <p>本記事では、JavaScriptでWindowを制御するサンプルプログラムを、ご紹介します。</p>

        <h2>Windowのサイズを取得するサンプル</h2>
        <h3>demo</h3>
        <div class=wrap_win_size>
        あなたの開いているWindowのサイズは、
        <p id="windowSize"></p>
        </div>
        <p>※Windowサイズを変更できる方を、変更してみてください。上記の数値が変化すると思います。</p>

        <h3>サンプル</h3>
        <div class="content shadow-sm"><pre>
            <code>
onload = winSizeMon; //『１』
onresize = winSizeMon; //『２』

function winSizeMon() { // 『３』
    const output = document.getElementById("windowSize");
    output.textContent = `縦: ${innerHeight}px / 横: ${innerWidth}px`;
}</code>
            </pre></div>

            <ul>
                <li>『１』本記事を読み込んだ時に、winSizeMon関数が１回実行されます。</li>
                <li>『２』Windowサイズが変更される度に、winSizeMon関数が実行されます。</li>
                <li>『３』縦横のサイズを取得して、HTML上に、その数値を出力する関数です</li>
            </ul>

     </div>

    </main>
    <script src="./window.js"></script>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>