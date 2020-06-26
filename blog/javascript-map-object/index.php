<?php
$title = "JavaScript Mapオブジェクト";
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
        <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/9 <i class="fas fa-wrench"></i>2020/6/17 <i class="fas fa-user-edit"></i>Aki</div>
        <p>本記事では、連想配列を処理するMapオブジェクトについてのサンプルをご紹介します。</p>

        <h2>宣言・定義⇒要素出力サンプル</h2>

        <h3>アロー関数を使った場合</h3>
        <div class="content shadow-sm"><pre>
            <code>
let level = new Map();

level.set('主人公', 50);
level.set('ハッサン', 52);
level.set('ミレーユ', 48);

level.forEach((value, key) => {
    console.log(`${key}のレベルは、${value}です。`);
});

// -> "主人公のレベルは、50です。"
// -> "ハッサンのレベルは、52です。"
// -> "ミレーユのレベルは、48です。"</code>
            </pre></div>

        <h3>Function()を使った場合</h3>
        <div class="content shadow-sm"><pre>
        <code>
let level = new Map();

level.set('主人公', 50);
level.set('ハッサン', 52);
level.set('ミレーユ', 48);

level.forEach(function(value, key){
    console.log(`${key}のレベルは、${value}です。`);
});

// -> "主人公のレベルは、50です。"
// -> "ハッサンのレベルは、52です。"
// -> "ミレーユのレベルは、48です。"</code>
            </pre></div>


    <h2>特定のkeyの値を出力させるサンプル</h2>
    <div class="content shadow-sm"><pre>
            <code>
let level = new Map();

level.set('主人公', 50);
level.set('ハッサン', 52);
level.set('ミレーユ', 48);

console.log(level.get('主人公'));

// -> 50</code>
            </pre></div>
    </div>
    </main>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>