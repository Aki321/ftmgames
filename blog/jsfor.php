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
            <a class="navbar-brand" href="index.php"><span class="far fa-clock icon"></span> Free Time Games</a>
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
        <h1>JavaScript~for~</h1>
        <p>今回は配列をforループ処理をご紹介します。</p>

        <h2>要素を取り出すサンプル</h2>
            <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

for (var i = 0; i < job.length; i++) {
    console.log(job[i]);
}

> "勇者"
> "戦士"
> "武闘家"</code>
            </pre></div>


        <h2>for in</h2>
            <div class="content shadow-sm"><pre>
            <code>
const job = {name:'ハッサン', '職業':'武闘家', '武器':'はかいのてっきゅう', level:30};

for (const property in job) {
    console.log(`${property}の職業は、${job[property]}`);
}

> "name：ハッサン"
> "職業：武闘家"
> "武器：はかいのてっきゅう"
> "level：30"</code>
            </pre></div>

        <h2>for of</h2>

        <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

for (const elem of job) {
    console.log(elem);
}

> "勇者"
> "戦士"
> "武闘家"</code>
        </pre></div>

        <h2>break</h2>

        <div class="content shadow-sm"><pre>
        <code>
const job = ['勇者', '戦士', '武闘家'];

for(var i = 0; i < job.length; i++){
    console.log(job[i]);
    if ( job[i] === "戦士" ) {
        break;
    }
}

> "勇者"
> "戦士"</code>
        </pre></div>
        </div>
    </main>
</body>
</html>