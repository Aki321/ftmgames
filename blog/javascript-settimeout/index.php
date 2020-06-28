<?php
$title = "JavaScript setTimeout";
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
        <div class="history text-right rounded p-1 mb-3 shadow-sm">
            <i class="fas fa-pencil-alt"></i>
            <time itemprop="datePublished">2020/06/28</time> 
            <i class="fas fa-wrench"></i>
            <time itemprop="dateModified">-</time> 
            <i class="fas fa-user-edit"></i>Aki 
        </div>
        <p>本記事では、JavaScriptでsetTimeoutのサンプルプログラムを、ご紹介します。</p>

        <h2>setTimeoutを使って、クリックした５秒後に、そのHTMLの要素を消すサンプル</h2>
        <h3>demo</h3>
        <div class=wrap_demo>
            <div id="moveBox"></div>
        </div>
        <p></p>
        <ul>
            <li>白いボックスをクリックしてみてください。ボックスの色が赤くなり、５秒後にボックスが消えます。</li>
            <li>赤くなったボックスを、クリックするとボックスが消えるのを防ぐことが出来ます。</li>
        </ul>

        <h3>サンプル</h3>
        <div class="content shadow-sm"><pre>
            <code>
const distance = 160;
const moveBox = document.getElementById('moveBox');
const boxStyle = getComputedStyle(moveBox);
let timerId;

function boxmover(){ //『１』
    document.getElementById('moveBox').animate([
    { top:          '0px', left:          '0px' },
    { top:`${distance}px`, left:          '0px' },
    { top:`${distance}px`, left:`${distance}px` },
    { top:          '0px', left:`${distance}px` },
    { top:          '0px', left:          '0px' }
    ], {
        duration: 15000,
        iterations: Infinity
    });
}


moveBox.onclick = function(){ //『２』
    if(boxStyle.backgroundColor.match(/rgb\(255, 255, 255\)/)){ //『３』
        moveBox.style.backgroundColor="red";
        timerId = setTimeout(erace, 5000);

    } else { //『４』
        console.log(`赤色なので白色に変更します`);
        moveBox.style.backgroundColor="white";
        clearTimeout(timerId);
    }
}

function erace() { //『５』
    moveBox.style.display="none";
}

onload = boxmover;</code>
            </pre></div>

            <ul>
                <li>『１』Boxを動かしている関数です。</li>
                <li>『２』Boxがクリックされた時に呼び出される関数です。</li>
                <li>『３』Boxの色が白の時に、赤色に変更して、Boxを５秒後に消すタイマーをセットしています。</li>
                <li>『４』Boxの色が赤の時に、白色に変更して、Boxを５秒後に消すタイマーをクリアしています。</li>
                <li>『５』５秒後に呼ばれるBoxを消す処理を行う関数です。</li>
            </ul>

     </div>

    </main>
    <script src="./settimeout.js"></script>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>