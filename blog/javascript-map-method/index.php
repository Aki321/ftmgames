<?php
$title = "JavaScript mapメソッド";
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
            <time itemprop="dataPublished">2020/06/14</time> 
            <i class="fas fa-wrench"></i>
            <time itemprop="dataModified">-</time> 
            <i class="fas fa-user-edit"></i>Aki 
        </div>
        <p>既存の配列のすべての要素に対して、処理を行い、新たな要素を生成するMapを紹介します。</p>

        <h2>配列の各要素を倍にするサンプル</h2>
        <p>下記のサンプルは、攻撃力という配列の各要素を倍にして、それらをバイキルトという配列に格納しています。</p>
        <p>※解かりやすくするために、あえて変数名に日本語を使っていますが、実際に変数名に日本語を使うケースは稀かと思います。</p>
        <div class="content shadow-sm"><pre>
            <code>
const 攻撃力 = [30, 70, 10];

const バイキルト = 攻撃力.map(x => x * 2);

console.log(バイキルト);

// -> [60, 140, 20]</code>
            </pre></div>


            <h2>インデックスを扱うサンプル</h2>
            下記のように、Mapのコールバック関数に2つ目の引数(i)を指定すると、配列のインデックスを扱うことができます。
            下記のサンプルは、配列の要素を2倍にしたものに、それぞれのインデックスの値を乗算した配列を生成した例になります。
            <div class="content shadow-sm"><pre>
            <code>
const 攻撃力 = [30, 70, 10];

const バイキルトex = 攻撃力.map((x, i) => x * 2 * i);

console.log(バイキルトex);

// -> [0, 140, 40]
// ⇒30*2*0=0 , 70*2*1=140, 10*2*2=40</code>
            </pre></div>
    </div>
    </main>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>