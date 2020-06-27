<?php
$title = "JavaScript foreach";
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
            <time itemprop="dataPublished">2020/06/12</time> 
            <i class="fas fa-wrench"></i>
            <time itemprop="dataModified">-</time> 
            <i class="fas fa-user-edit"></i>Aki 
        </div>
        <p>今回は配列を簡単にループ処理することができるforEachをご紹介します。</p>

        <h2>要素を取り出すサンプル</h2>
        <p>下記の配列の中身を一つづつconsoleに出力するサンプルを示します。一行でループ処理が書けました。</p>
            <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

job.forEach(elem => console.log(elem));

// -> "勇者"
// -> "戦士"
// -> "武闘家"</code>
            </pre></div>


        <h2>要素とインデックスを取り出すサンプル</h2>
            <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

job.forEach((elem, index) => {
    console.log(`[${index}]インデックスの要素は[${elem}]`);
});

// -> "[0]インデックスの要素は[勇者]"
// -> "[1]インデックスの要素は[戦士]"
// -> "[2]インデックスの要素は[武闘家]"</code>
            </pre></div>

        <h2>Breakは扱えない</h2>
        <p>ループ処理を途中で中断して、次の制御に移るBreakは、forEachでは使えません。
        下記サンプルは、jobの配列の中から"戦士"を見つけたらループを終了したいという意図で書いていますが、Breakは使用できなので、エラーになります。</p>

        <h3>エラーサンプル</h3>
        <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

job.forEach(elem => {
    console.log(elem);
    if ( elem === "戦士" ) {
        break;
    }
});

// -> Error: Illegal break statement</code>
        </pre></div>

        <h3>代替サンプル</h3>

        <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

for(var i = 0; i < job.length; i++){
    console.log(job[i]);
    if ( job[i] === "戦士" ) {
        break;
    }
}

// -> "勇者"
// -> "戦士"</code>
        </pre></div>

        <h2>continueは扱えない</h2>
        <p>ループ中に特定の条件の時だけ処理をスキップできるcontinueは、forEachでは使えません。</p>

        <h3>エラーサンプル</h3>
        <p>期待している動作は、配列の要素が戦士だった時だけ、コンソールへの出力をスキップするというものですが、continueが使えないのでエラーになります。</p>
        <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

job.forEach(element => {
    if(element === "戦士"){
        continue;
    }
    console.log(element);
});

// -> Error: Illegal continue statement: no surrounding iteration statement</code>
        </pre></div>

        <h3>代替サンプル</h3>
        <p>下記のようにreturnを使用することで、配列の要素が戦士だった時だけ、コンソールへの出力をスキップするという動作になりました。returnの関数を実行を停止するという動作は、forEachに効いているのではなく、forEachのコールバック関数に効いています。</p>
        <div class="content shadow-sm"><pre>
        <code>
const job = ['勇者', '戦士', '武闘家'];

job.forEach(element => {
    if(element === "戦士"){
        return;
    }
    console.log(element);
});

// -> "勇者"
// -> "武闘家"</code>
        </pre></div>

    <h2>連想配列</h2>
    <p>連想配列をforEachで扱うサンプルプログラムを紹介します。
    まず、最初にObject.keysで、連想配列のkeyの部分だけを配列charaに格納します。
    そのcharaをforEachでループ処理することによって、連想配列の中身を出力できました。</p>

    <div class="content shadow-sm"><pre>
        <code>
const job = {'主人公':'勇者', 'ハッサン':'戦士', 'ミレーユ':'武闘家'};

const chara = Object.keys(job);
console.log(chara);

chara.forEach(elem => {
    console.log(`${elem}の職業は[${job[elem]}]`)
});

// -> Array ["主人公", "ハッサン", "ミレーユ"]
// -> "主人公の職業は[勇者]"
// -> "ハッサンの職業は[戦士]"
// -> "ミレーユの職業は[武闘家]"</code>
        </pre></div> 
    </div>
    </main>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>