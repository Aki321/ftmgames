<?php
$title = "JavaScript Ajax";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $title; ?></title>
<?php include('../../html/blogHead.html'); ?>
</head>

<body>
<?php include('../../html/blogHeader.html'); ?>
    <main>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <div class="history text-right rounded p-1 mb-3 shadow-sm">
            <i class="fas fa-pencil-alt"></i>
            <time itemprop="datePublished">2020/06/25</time> 
            <i class="fas fa-wrench"></i>
            <time itemprop="dateModified">-</time> 
            <i class="fas fa-user-edit"></i>Aki 
        </div>
        <p>本記事では、JavaScriptのAjaxのサンプルプログラムを、ご紹介します。</p>

        <h2>AjaxでサーバーサイドのPHPファイルにデータを送るサンプル</h2>
        <h3>クライアント側のサンプル(JavaScript)</h3>
        <p>下記のサンプルは、各キャラのレベル情報をサーバーに送るサンプルプログラムです。</p>
        <p>通信の完了を待った後に、サーバー側のPHPの出力(echo)を.responseTextを使って、コンソールに出力しています。</p>
        <div class="content shadow-sm"><pre>
            <code>
var level = new FormData();
level.append('主人公'  , 50);
level.append('ハッサン', 55);
level.append('ミレーユ', 45);


var xhr = new XMLHttpRequest();
xhr.open("POST", "./sampleAjax.php", true);
xhr.onreadystatechange = function () {
    console.log("イベントハンドラ");
    console.log(`readystate=${xhr.readyState} / status=${xhr.status}`);
    if (xhr.readyState != 4 || xhr.status != 200) {
        console.log(`returnします`);
        return;
    }
    console.log(`${xhr.responseText}`);
};
xhr.send(level);</code>
            </pre></div>

            <h3>サーバー側のサンプル(sampleAjax.php)</h3>
        <p>クライアント側から送信されたデータを変数に格納してechoしているだけです。このechoは、クライアント側のJavaScriptの.responseTextから出力されます。</p>
        <div class="content shadow-sm"><pre>
            <code>
$heroLv = $_POST['主人公'];
$hassanLv = $_POST['ハッサン'];
$mireilleLv = $_POST['ミレーユ'];

echo "**********************************"."\n";
echo "PHP側でデータを受け取りました。"."\n";
echo $heroLv." , ".$hassanLv." , ".$mireilleLv."\n";
echo "**********************************"."\n";</code>
            </pre></div>


            <h3>実行結果(console)</h3>
            <div class="content shadow-sm"><pre>
            <code>
> イベントハンドラ
> readystate=2 / status=200
> returnします
> イベントハンドラ
> readystate=3 / status=200
> returnします
> イベントハンドラ
> readystate=4 / status=200
> **********************************
> PHP側でデータを受け取りました。
> 50 , 55 , 45
> **********************************
</code>
            </pre></div>
            <p>readystate=4 / status=200が通信完了であることを示しています。consoleに出力されている値（50, 55, 45）は、PHP側で受け取ったものを出力しているので、クライアント側(JavaScript)からサーバー側(PHP)へデータが送られていることがわかると思います。</p>
    </div>

    </main>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>