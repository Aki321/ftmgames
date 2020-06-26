<?php
$title = "JavaScript アニメーション";
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
        <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/26 <i class="fas fa-wrench"></i>- <i class="fas fa-user-edit"></i>Aki</div>
        <p>本記事では、JavaScriptで作るアニメーションについて、ご紹介します。</p>

        <h2>フェードイン・アウト</h2>
        <h3>demo</h3>
        <div class="wrap_fade">
            <div id="fadein" onclick="fadein()">クリックすると『フェードイン』します。</div>
            <div id="fadeout" onclick="fadeout()">クリックすると『フェードアウト』します。</div>
        </div>

        <h3>フェードイン-サンプルプログラム-</h3>
        <div class="content shadow-sm"><pre>
            <code>
function fadein(){
  document.getElementById('fadein').animate({
    opacity: [ 0, 1 ],
    color: [ "#fff", "#000" ]
  }, 2000);
}</code>
            </pre></div>
        
        <h3>フェードアウト-サンプルプログラム-</h3>
        <div class="content shadow-sm"><pre>
            <code>
function fadeout(){
  document.getElementById('fadeout').animate({
    opacity: [0, 1]
  }, {
    direction: 'reverse',
    duration: 2000,
    easing: 'ease-in-out',
    fill: 'forwards'
  })
}</code>
            </pre></div>
    
        <h2>縦横移動</h2>
        <h3>demo</h3>
        <div class="wrap_move">
            <div id="laterally" onclick="laterally()">クリックすると『横に移動』します。</div>
            <div id="vertically" onclick="vertically()">クリックすると『縦に移動』します。</div>
        </div>

        <h3>横移動-サンプルプログラム-</h3>
        <div class="content shadow-sm"><pre>
            <code>
function laterally(){
  document.getElementById('laterally').animate([
    { left:    '0px' },
    { left: '-100px' },
    { left:  '100px' },
    { left:    '0px' }
  ], 2000);
}</code>
            </pre></div>
        
        <h3>縦移動-サンプルプログラム-</h3>
        <div class="content shadow-sm"><pre>
            <code>
function vertically(){
  document.getElementById('vertically').animate([
    { top:    '0px' },
    { top: '-100px' },
    { top:  '100px' },
    { top:    '0px' }
  ], 2000);
}  </code>
            </pre></div>


    </div>

    </main>
    <script src="./animate.js"></script>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>