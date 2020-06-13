<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript~for~</title>
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
        <h1>JavaScript~for~</h1>
        今回は配列をforループ処理をご紹介します。

        <h2>要素を取り出すサンプル</h2>
            <pre>
            <code>
    const job = ['勇者', '戦士', '武闘家'];

    for (var i = 0; i < job.length; i++) {
        console.log(job[i]);
    }
    
    > "勇者"
    > "戦士"
    > "武闘家"

            </code>
            </pre>


        <h2>for in</h2>
            <pre>
            <code>

        
    const job = {name:'ハッサン', '職業':'武闘家', '武器':'はかいのてっきゅう', level:30};

    for (const property in job) {
        console.log(`${property}の職業は、${job[property]}`);
    }

    > "name：ハッサン"
    > "職業：武闘家"
    > "武器：はかいのてっきゅう"
    > "level：30"

            </code>
            </pre>

        <h2>for of</h2>

        <pre>
            <code>

    const job = ['勇者', '戦士', '武闘家'];

    for (const elem of job) {
        console.log(elem);
    }

    > "勇者"
    > "戦士"
    > "武闘家"

            </code>
        </pre>

        <h2>break</h2>

        <pre>
        <code>
    const job = ['勇者', '戦士', '武闘家'];

    for(var i = 0; i < job.length; i++){
        console.log(job[i]);
        if ( job[i] === "戦士" ) {
            break;
        }
    }

    > "勇者"
    > "戦士"

        </code>
        </pre>

    </main>


</body>
</html>