<?php
$title = "JavaScript アニメーション";
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
        <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/26 <i class="fas fa-wrench"></i>- <i class="fas fa-user-edit"></i>Aki</div>
        <p>本記事では、JavaScriptで作るアニメーションについて、ご紹介します。</p>

        <h2>文字列内にある特定の文字列を全て置き換えるサンプル</h2>
        <p>下記のサンプルは、commentという文字列内にある、ファイア系の呪文の文字列をケアル系の呪文の文字列に置き換えるサンプルプログラムです。</p>
        <div class="content shadow-sm"><pre>
            <code>
let comment = "クラウドは、「ファイア」と「ファイラ」と「ファイガ」を覚えた";
let regEx = /ファイ/g;

console.log(comment.replace(regEx, "ケアル"));
// -> クラウドは、「ケアルア」と「ケアルラ」と「ケアルガ」を覚えた</code>
            </pre></div>

        <h2>文字列内にある特定の文字列を一つだけ置き換えるサンプル</h2>
        <p>前にサンプルプログラムでは、全てのファイア系の文字列を置換しましたが、1つだけ置換する場合のサンプルもご紹介します。</p>
        <div class="content shadow-sm"><pre>
            <code>
let comment = "クラウドは、「ファイア」と「ファイラ」と「ファイガ」を覚えた";
let str = "ファイラ";

console.log(comment.replace(str, "ケアルラ"));
// -> クラウドは、「ファイア」と「ケアルラ」と「ファイガ」を覚えた</code>
            </pre></div>
    </div>

    </main>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>