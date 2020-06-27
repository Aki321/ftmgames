<?php
$title = "JavaScript 配列";
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
            <time itemprop="datePublished">2020/06/10</time> 
            <i class="fas fa-wrench"></i>
            <time itemprop="dateModified">-</time> 
            <i class="fas fa-user-edit"></i>Aki 
        </div>
        <p>今回はJavaScriptの配列についてご紹介します。</p>

        <h2>宣言・定義</h2>
            <div class="content shadow-sm"><pre>
                <code>
let job = ["戦士", "武闘家", "僧侶" , "魔法使い", "踊り子"];
console.log( job[0] ); // ->　戦士
console.log( job[1] ); // -> 武闘家</code>
            </pre></div>
            <p>※配列の要素のインデックスは”０”からはじまる。</p>

        <h2>追加</h2>
        <p>配列にあらたな要素を追加したい場合は、下記の３つのメソッドがあります。</p>
        <ul>
            <li>push</li>
            <li>unshift</li>
            <li>splice</li>
        </ul>
        <h3>push</h3>
        <p>配列の最後に指定した新しい要素を追加する</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家"];
job.push("バトルマスター");
console.log( job ); // -> ["戦士", "武闘家", "バトルマスター"]</code>
        </pre></div>

        <h3>unshift</h3>
        <p>配列の先頭に指定した新しい要素を追加する</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家"];
job.unshift("羊使い");
console.log( job ); // -> ["羊使い", "戦士", "武闘家"]</code>
        </pre></div>


        <h3>splice</h3>
        <p>配列の特定のインデックスに要素を追加する</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家", "僧侶" , "魔法使い", "踊り子"];
job.splice(2, 0, "海賊");
console.log( job ); // -> ["戦士", "武闘家", "海賊", "僧侶" , "魔法使い", "踊り子"]</code>
        </pre></div>

        <p>spliceの最初の引数で、何番目のインデックスに追加するか指定できます。この時インデックスは0から始まります。この例で言うと、戦士の前に海賊を追加したい場合は、最初の引数を0に設定します。
        spliceの2番目の引数は、要素を追加する場合は、0固定で問題ありません。</p>

        <h2>結合</h2>
        <h3>concat:配列と配列を結合する</h3>
        <div class="content shadow-sm"><pre>
            <code>
let jobA = ["戦士", "武闘家", "僧侶"];
let jobB = ["賢者", "海賊", "勇者"];
let jobC = jobA.concat(jobB);
console.log( jobC ); // -> ["戦士", "武闘家", "僧侶" , "賢者", "海賊", "勇者"]</code>
        </pre></div>

        <h3>join:配列の中身を結合して文字列にする</h3>

        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家", "僧侶"];
let jobStr = job.join('');
console.log( jobStr ); // -> '戦士武闘家僧侶'</code>
        </pre></div>

        <p>joinの引数に任意の文字列を入れるとArrayの要素完にその文字列を挿入してくれます。</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家", "僧侶"];
let jobStr = job.join('スライム');
console.log( jobStr ); // -> '戦士スライム武闘家スライム僧侶'</code>
        </pre></div>

        <h2>要素数</h2>
        <p>length:配列の中に要素数が何個あるか数える</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家", "僧侶"];
let jobNum = job.length;
console.log( `あなたが選択できる職業の数は${jobNum}つです。` ); 
// -> あなたが選択できる職業は3つです。</code>
        </pre></div>


        <h2>ループ</h2>
        <p>配列のループに関する処理は、多数ありますが、例としてforEachを紹介します。</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家", "僧侶"];
job.forEach(element => {
    console.log(element);
})
// -> 戦士
// -> 武闘家
// -> 僧侶</code>
        </pre></div>

        <p>インデックスも取り出したい場合は、下記のようにします。</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "武闘家", "僧侶"];
job.forEach((element, index) => {
    console.log(`${index}番目の職業は${element}`);
})
// -> 0番目の職業は戦士
// -> 1番目の職業は武闘家
// -> 2番目の職業は僧侶</code>
        </pre></div>

        <h2>検索</h2>
        <p>検索する処理も多数ありますが、今回は下記の2つをご紹介します。</p>
        <ul>
            <li>indexOf</li>
            <li>find</li>
        </ul>
        <h3>indexOf</h3>
        <p>indexOfは、配列の中を検索して、最初の該当した要素のインデックスを返します。無ければ-1を返します。</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "魔法使い", "魔法戦士"];
console.log(job.indexOf("戦士")); // -> 0
console.log(job.indexOf("魔法使い")); // -> 1
console.log(job.indexOf("魔法戦士")); // -> 2
console.log(job.indexOf("僧侶")); // -> -1</code>
        </pre></div>



        <h3>find</h3>
        <p>上のfindプログラムでは、jobという配列の中に戦士があるか確認して、あれば戦士という値を返します。
        逆に下のfindプログラムでは、配列の中に武闘家という要素は無いので、undefinedを返します。</p>
        <div class="content shadow-sm"><pre>
            <code>
let job = ["戦士", "魔法使い", "魔法戦士"];
let result = job.find(element => element === "戦士");
console.log(result); // -> 戦士

result = job.find(element => element === "武闘家");
console.log(result); // -> undefined</code>
        </pre></div>


        <h2>ソート</h2>
        <p>下記の通り、sort関数を使用すると、配列の中身をソートすることが出来ます。sortの引数に何も指定しないと下記のような結果になります。
        (辞書順にソートされる)</p>
        <div class="content shadow-sm"><pre>
            <code>
const level = [45, 99, 1, 100, 40, 200];
level.sort();
console.log(level); // -> [1, 100, 200, 40, 45, 99]</code>
        </pre></div>

        <p>上記を数字の小さい順にしたい場合は、ソートに引数に関数を指定する必要があります。
        以下にサンプルコードを示します。値が小さい順位ソートされています。</p>
        <div class="content shadow-sm"><pre>
            <code>
function compare(a, b) {
    if (a < b) { return -1; } //bの順番を遅くする(マイナスする)
    if (a > b) { return 1; } //bを順番を早くする(プラスする)
    return 0;
}

level.sort(compare);
console.log(level);　// -> [1, 40, 45, 99, 100, 200]</code>
        </pre></div>

        <p>上記のように、a値を基準にb値を比較して、bの順番を遅くしたい場合は、-1を返し、逆に順番を早めたい場合は、1を返します。順番を変えない場合は、0を返します。
        サンプルの場合、aよりもbの方が大きい場合は、bの順番を遅くしたいので、-1を返しています。aよりbの方が小さい場合は、bの順番を早めたいので、1を返しています。</p>


        <h2>コピー(値渡し)</h2>
        <p>配列のコピーには様々な方法がありますが、今回はシンプルな記述ですむcontactのサンプルをご紹介します。</p>
        <p>下記のサンプルプログラムでは、concatで配列をコピーした後に、コピー先のjobCopyの値を変更しても、コピー元のjobSrcの値は、この変更に影響を受けません。</p>
        <div class="content shadow-sm"><pre>
            <code>
let jobSrc = ["戦士", "武闘家", "勇者"];
let jobCopy = jobSrc.concat();
console.log(jobCopy); // -> "戦士", "武闘家", "勇者"

jobCopy[1]='パラディン';

console.log(jobSrc); // -> "戦士", "武闘家", "勇者"
console.log(jobCopy); // -> "戦士", "パラディン", "勇者"</code>
        </pre></div>  
        </div>
    </main>
    <?php include('../../html/commonFooter.html'); ?>
    <?php include('../../html/blogSrcLinkOfBodyLast.html'); ?>
</body>
</html>