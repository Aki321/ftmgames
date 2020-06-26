console.log('-JavaScript replace-');

console.log('--文字列内にある文字列を全て置き換えるサンプル--');

    let comment = "クラウドは、「ファイア」と「ファイラ」と「ファイガ」を覚えた";
    let regEx = /ファイ/g;

    console.log(comment.replace(regEx, "ケアル"));
    // -> クラウドは、「ケアルア」と「ケアルラ」と「ケアルガ」を覚えた

console.log('--文字列内にある特定の文字列を一つだけ置き換えるサンプル--');

    comment = "クラウドは、「ファイア」と「ファイラ」と「ファイガ」を覚えた";
    let str = "ファイラ";

    console.log(comment.replace(str, "ケアルラ"));
    // -> クラウドは、「ファイア」と「ケアルラ」と「ファイガ」を覚えた



