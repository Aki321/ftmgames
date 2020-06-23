<!DOCTYPE html>
<html lang="ja">
<?php include('../html/blogHead.html'); ?>
<body>
<?php include('../html/blogHeader.html'); ?>
    <main>
    <div class="container">
        <h1>JavaScript ~正規表現~</h1>
        <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/23 <i class="fas fa-wrench"></i>- <i class="fas fa-user-edit"></i>Aki</div>
        <p>本記事では、JavaScriptの正規表現について、ご紹介します。</p>

        <h2>正規表現があると何がうれしいのか？</h2>
        <p>下記のような配列があったとしましょう。</p>
        <div class="content shadow-sm"><pre>
            <code>
let magic = ["メラ", "メラミ", "メラゾーマ", "ギラ", "ベギラマ", "ベギラゴン"];</code>
            </pre></div>


        <p>例えば、この配列からメラ系の魔法のみを出力したい場合に、どのようなプログラムになるでしょうか？下記に正規表現を使わないサンプルプログラムと正規表現を使ったサンプルプログラムを示します。</p>

        <h3>正規表現を使わないサンプルプログラム</h3>
        <div class="content shadow-sm"><pre>
            <code>
let magic = ["メラ", "メラミ", "メラゾーマ", "ギラ", "ベギラマ", "ベギラゴン"];
magic.forEach(elem => {
    if (elem == "メラ" | elem == "メラミ" | elem == "メラゾーマ") {
        console.log(elem);
    }
});

// -> "メラ"
// -> "メラミ"
// -> "メラゾーマ"</code>
            </pre></div>


            <h3>正規表現を使ったサンプルプログラム</h3>
            <div class="content shadow-sm"><pre>
            <code>
let magic = ["メラ", "メラミ", "メラゾーマ", "ギラ", "ベギラマ", "ベギラゴン"];
magic.forEach(elem => {
    if ( elem.match(/^メラ/) != null ) {
        console.log(elem);
    }
});

// -> "メラ"
// -> "メラミ"
// -> "メラゾーマ"</code>
            </pre></div>

    <p>上記2つのサンプルの違いは、if文の条件式です。正規表現を使わないプログラムでは、すべてのメラ系の魔法を条件式に記載しています。</p>
    <p>これに対して、正規表現を使ったサンプルプログラムでは、/^メラ/という書き方をしています。これが、正規表現であり、”メラの２文字で始まる”という意味になります。</p>
    <p>メラ系の魔法は、すべて名前がメラの２文字から始まっている規則性を利用しています。文字列に規則性があれば、正規表現を使って、プログラムを短くすることが出来ます。</p>
    <p>今回は、メラ、メラミ、メラゾーマの３種類しかない例でしたが、これが、何百、何千種類とあるケースであれば、正規表現でプログラムを組むことは必須となってくると思います。</p>

    </div>

    </main>
    <?php include('../html/commonFooter.html'); ?>
    <?php include('../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>