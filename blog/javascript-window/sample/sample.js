console.log('-JavaScript Window-');

console.log(`モニターの解像度${screen.width}`);
console.log(`モニターの利用可能領域${screen.availWidth}`);
console.log(`ブラウザウィンドウの表示領域${screen.availWidth}`);
console.log(`ウィンドウ外観の幅${window.outerWidth}`);
console.log(`ドキュメント全体の幅${document.body.clientWidth}`);
console.log(`ドキュメントの表示領域${document.documentElement.clientWidth}`);

console.log(`物理ピクセルと端末非依存ピクセルの比率:${window.devicePixelRatio}`);
console.log(`指定ウィンドウが含む文書:${window.document}`);

console.log(`${window.fullScreen}`)

//window.alert();
//window.find("aaaa");
//window.open(); //セキュリティで禁止されているかもしれない
//window.minimize();


window.onresize = function(){
    alert("aaaa");
}
