<!DOCTYPE html>
<html lang="ja">
<?php include('../html/blogHead.html'); ?>
<body>
<?php include('../html/blogHeader.html'); ?>
    <main>
        <div class="container">
        <h1>JavaScript~for~</h1>
        <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/9 <i class="fas fa-wrench"></i>2020/6/17 <i class="fas fa-user-edit"></i>Aki</div>
        <p>今回は配列をforループ処理をご紹介します。</p>

        <h2>要素を取り出すサンプル</h2>
            <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

for (var i = 0; i < job.length; i++) {
    console.log(job[i]);
}

// -> "勇者"
// -> "戦士"
// -> "武闘家"</code>
            </pre></div>


        <h2>for in</h2>
            <div class="content shadow-sm"><pre>
            <code>
const job = {name:'ハッサン', '職業':'武闘家', '武器':'はかいのてっきゅう', level:30};

for (const property in job) {
    console.log(`${property}：${job[property]}`);
}

// -> "name：ハッサン"
// -> "職業：武闘家"
// -> "武器：はかいのてっきゅう"
// -> "level：30"</code>
            </pre></div>

        <h2>for of</h2>

        <div class="content shadow-sm"><pre>
            <code>
const job = ['勇者', '戦士', '武闘家'];

for (const elem of job) {
    console.log(elem);
}

// -> "勇者"
// -> "戦士"
// -> "武闘家"</code>
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

// -> "勇者"
// -> "戦士"</code>
        </pre></div>
        </div>
    </main>
    <?php include('../html/commonFooter.html'); ?>
</body>
</html>