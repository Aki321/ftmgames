<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript~Mapオブジェクト~</title>
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
        <h1>JavaScript~Mapオブジェクト~</h1>
        本記事では、連想配列を処理するMapオブジェクトについてのサンプルをご紹介します。

        <h2>宣言・定義⇒要素出力サンプル</h2>

        <h3>アロー関数を使った場合</h3>
            <pre>
            <code>

    let level = new Map();

    level.set('主人公', 50);
    level.set('ハッサン', 52);
    level.set('ミレーユ', 48);

    level.forEach((value, key) => {
        console.log(`${key}のレベルは、${value}です。`);
    });

    > "主人公のレベルは、50です。"
    > "ハッサンのレベルは、52です。"
    > "ミレーユのレベルは、48です。"

            </code>
            </pre>

            <h3>Function()を使った場合</h3>
            <pre>
            <code>

    let level = new Map();

    level.set('主人公', 50);
    level.set('ハッサン', 52);
    level.set('ミレーユ', 48);

    level.forEach(function(value, key){
        console.log(`${key}のレベルは、${value}です。`);
    });

    > "主人公のレベルは、50です。"
    > "ハッサンのレベルは、52です。"
    > "ミレーユのレベルは、48です。"

            </code>
            </pre>


    <h2>特定のkeyの値を出力させるサンプル</h2>
            <pre>
            <code>
    let level = new Map();

    level.set('主人公', 50);
    level.set('ハッサン', 52);
    level.set('ミレーユ', 48);

    console.log(level.get('主人公'));

    > 50


            </code>
            </pre>

    </main>


</body>
</html>