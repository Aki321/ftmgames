<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript入門(Hello World)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="../index.php"><span class="far fa-clock icon"></span> Free Time Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php"><span class="fas fa-home"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#listable"><span class="fas fa-gamepad"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#blogs"><span class="fas fa-blog icon"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#aboutcont"><span class="fas fa-book"></span></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <div class="container">
        <h1>JavaScript~mapクラス~</h1>
        <p>既存の配列のすべての要素に対して、処理を行い、新たな要素を生成するMapを紹介します。</p>

        <h2>配列の各要素を倍にするサンプル</h2>
        <p>下記のサンプルは、攻撃力という配列の各要素を倍にして、それらをバイキルトという配列に格納しています。</p>
        <p>※解かりやすくするために、あえて変数名に日本語を使っていますが、実際に変数名に日本語を使うケースは稀かと思います。</p>
        <div class="content shadow-sm"><pre>
            <code>
const 攻撃力 = [30, 70, 10];

const バイキルト = 攻撃力.map(x => x * 2);

console.log(バイキルト);

> Array [60, 140, 20]</code>
            </pre></div>


            <h2>インデックスを扱うサンプル</h2>
            下記のように、Mapのコールバック関数に2つ目の引数(i)を指定すると、配列のインデックスを扱うことができます。
            下記のサンプルは、配列の要素を2倍にしたものに、それぞれのインデックスの値を乗算した配列を生成した例になります。
            <div class="content shadow-sm"><pre>
            <code>
const 攻撃力 = [30, 70, 10];

const バイキルトex = 攻撃力.map((x, i) => x * 2 * i);

console.log(バイキルトex);

> Array [0, 140, 40]
⇒30*2*0=0 , 70*2*1=140, 10*2*2=40</code>
            </pre></div>
    </div>
    </main>
</body>
</html>