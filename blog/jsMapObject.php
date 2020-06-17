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
        <h1>JavaScript~Mapオブジェクト~</h1>
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

> "主人公のレベルは、50です。"
> "ハッサンのレベルは、52です。"
> "ミレーユのレベルは、48です。"</code>
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

> "主人公のレベルは、50です。"
> "ハッサンのレベルは、52です。"
> "ミレーユのレベルは、48です。"</code>
            </pre></div>


    <h2>特定のkeyの値を出力させるサンプル</h2>
    <div class="content shadow-sm"><pre>
            <code>
let level = new Map();

level.set('主人公', 50);
level.set('ハッサン', 52);
level.set('ミレーユ', 48);

console.log(level.get('主人公'));

> 50</code>
            </pre></div>
    </div>
    </main>


</body>
</html>