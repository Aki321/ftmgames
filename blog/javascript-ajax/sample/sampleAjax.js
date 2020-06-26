console.log('-JavaScript Ajax-');

var level = new FormData();
level.append('主人公'  , 50);
level.append('ハッサン', 55);
level.append('ミレーユ', 45);


var xhr = new XMLHttpRequest();
xhr.open("POST", "./sampleAjax.php", true);
xhr.onreadystatechange = function () {
    console.log("イベントハンドラ");
    console.log(`readystate=${xhr.readyState} / status=${xhr.status}`);
    if (xhr.readyState != 4 || xhr.status != 200) {
        console.log(`returnします`);
        return;
    }
    console.log(`${xhr.responseText}`);
};
xhr.send(level);