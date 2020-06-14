<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript~map()メソッド~</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="container-small">
                <a href="../index.php" class="headA"><span class="far fa-clock icon"></span> Free Time Games</a>

                <button type="button" class="headC">
                    <span class="fa fa-bars" title="MENU"></span>
                </button>
            </div>

            <nav class="top_menu">
                <ul>
                    <li class="top">
                        <a href="../index.php"><span class="fas fa-home"></span> Top</a>
                    </li>
                    <li class="games">
                        <a href="../index.php"><span class="fas fa-gamepad"></span> Games</a>
                    </li>
                    <li class="about">
                        <a href="../index.php"><span class="fas fa-book"></span> About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <h1>JavaScript~map()メソッド~</h1>
        既存の配列のすべての要素に対して、処理を行い、新たな要素を生成するMapを紹介します。

        <h2>配列の各要素を倍にするサンプル</h2>
        下記のサンプルは、攻撃力という配列の各要素を倍にして、それらをバイキルトという配列に格納しています。
        ※解かりやすくするために、あえて変数名に日本語を使っていますが、実際に変数名に日本語を使うケースは稀かと思います。
            <pre>
            <code>

    const 攻撃力 = [30, 70, 10];

    const バイキルト = 攻撃力.map(x => x * 2);

    console.log(バイキルト);

    > Array [60, 140, 20]

            </code>
            </pre>


            <h2>インデックスを扱うサンプル</h2>
            下記のように、Mapのコールバック関数に2つ目の引数(i)を指定すると、配列のインデックスを扱うことができます。
            下記のサンプルは、配列の要素を2倍にしたものに、それぞれのインデックスの値を乗算した配列を生成した例になります。
            <pre>
            <code>

    const 攻撃力 = [30, 70, 10];

    const バイキルトex = 攻撃力.map((x, i) => x * 2 * i);

    console.log(バイキルトex);

    > Array [0, 140, 40]
    ⇒30*2*0=0 , 70*2*1=140, 10*2*2=40

            </code>
            </pre>

    </main>


</body>
</html>