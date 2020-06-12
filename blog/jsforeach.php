<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript~forEach~</title>
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
        <h1>JavaScript~foreach~</h1>
        今回は配列を簡単にループ処理することができるforEachをご紹介します。

        <h2>要素を取り出すサンプル</h2>
        下記の配列の中身を一つづつconsoleに出力するサンプルを示します。一行でループ処理が書けました。
            <pre>
            <code>

    const job = ['勇者', '戦士', '武闘家'];

    job.forEach(elem => console.log(elem));

    > "勇者"
    > "戦士"
    > "武闘家"

            </code>
            </pre>


        <h2>要素とインデックスを取り出すサンプル</h2>
            <pre>
            <code>

    const job = ['勇者', '戦士', '武闘家'];

    job.forEach((elem, index) => {
        console.log(`[${index}]インデックスの要素は[${elem}]`);
    });

    > "[0]インデックスの要素は[勇者]"
    > "[1]インデックスの要素は[戦士]"
    > "[2]インデックスの要素は[武闘家]"

            </code>
            </pre>

        <h2>Breakは扱えない</h2>
        ループ処理を途中で中断して、次の制御に移るBreakは、forEachでは使えません。
        下記サンプルは、jobの配列の中から"戦士"を見つけたらループを終了したいという意図で書いていますが、Breakは使用できなので、エラーになります。

        <h3>エラーサンプル</h3>
        <pre>
            <code>

    const job = ['勇者', '戦士', '武闘家'];

    job.forEach(elem => {
        console.log(elem);
        if ( elem === "戦士" ) {
            break;
        }
    });

    ⇒Error: Illegal break statement

            </code>
        </pre>

        <h3>代替サンプル</h3>

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

        <h2>continueは扱えない</h2>
        ループ中に特定の条件の時だけ処理をスキップできるcontinueは、forEachでは使えません。

        <h3>エラーサンプル</h3>
        期待している動作は、配列の要素が戦士だった時だけ、コンソールへの出力をスキップするというものですが、continueが使えないのでエラーになります。
        <pre>
            <code>
    const job = ['勇者', '戦士', '武闘家'];

    job.forEach(element => {
        if(element === "戦士"){
            continue;
        }
        console.log(element);
    });

    ⇒Error: Illegal continue statement: no surrounding iteration statement

        </code>
        </pre>

        <h3>代替サンプル</h3>
        下記のようにreturnを使用することで、配列の要素が戦士だった時だけ、コンソールへの出力をスキップするという動作になりました。returnの関数を実行を停止するという動作は、forEachに効いているのではなく、forEachのコールバック関数に効いています。
        <pre>
        <code>
    const job = ['勇者', '戦士', '武闘家'];

    job.forEach(element => {
        if(element === "戦士"){
            return;
        }
        console.log(element);
    });

    > "勇者"
    > "武闘家"

        </code>
        </pre>

    <h2>連想配列</h2>
    連想配列をforEachで扱うサンプルプログラムを紹介します。
    まず、最初にObject.keysで、連想配列のkeyの部分だけを配列charaに格納します。
    そのcharaをforEachでループ処理することによって、連想配列の中身を出力できました。

    <pre>
        <code>

    const job = {'主人公':'勇者', 'ハッサン':'戦士', 'ミレーユ':'武闘家'};

    const chara = Object.keys(job);
    console.log(chara);

    chara.forEach(chara => {
        console.log(`${chara}の職業は[${job[chara]}]`)
    });

    > Array ["主人公", "ハッサン", "ミレーユ"]
    > "主人公の職業は[勇者]"
    > "ハッサンの職業は[戦士]"
    > "ミレーユの職業は[武闘家]"

    </code>
        </pre>

        

    </main>


</body>
</html>