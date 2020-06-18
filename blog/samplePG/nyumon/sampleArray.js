//配列
console.log('-配列-');

console.log('--宣言・定義--');
    let job = ["戦士", "武闘家", "僧侶" , "魔法使い", "踊り子"];
    console.log( job[0] ); // -> 戦士
    console.log( job[1] ); // -> 武闘家


console.log('--追加--');

    console.log('---push---');
        job = ["戦士", "武闘家"];
        job.push("バトルマスター");
        console.log( job ); // -> ["戦士", "武闘家", "バトルマスター"]
    
    console.log('---unshift---');
        job = ["戦士", "武闘家"];
        job.unshift("羊使い");
        console.log( job ); // -> ["羊使い", "戦士", "武闘家"]

    console.log('---splice---');
        job = ["戦士", "武闘家", "僧侶" , "魔法使い", "踊り子"];
        job.splice(2, 0, "海賊");
        console.log( job ); // -> ["戦士", "武闘家", "海賊", "僧侶" , "魔法使い", "踊り子"]

    
console.log('--結合--');
    console.log('---concat:配列と配列を結合する---');
        let jobA = ["戦士", "武闘家", "僧侶"];
        let jobB = ["賢者", "海賊", "勇者"];
        let jobC = jobA.concat(jobB);
        console.log( jobC ); // -> ["戦士", "武闘家", "僧侶" , "賢者", "海賊", "勇者"]

    console.log('---join:配列の中身を結合して文字列にする---');
        job = ["戦士", "武闘家", "僧侶"];
        let jobStr = job.join('');
        console.log( jobStr ); // -> 戦士武闘家僧侶

        job = ["戦士", "武闘家", "僧侶"];
        jobStr = job.join('スライム');
        console.log( jobStr ); // -> '戦士スライム武闘家スライム僧侶'

console.log('--要素数--');
    job = ["戦士", "武闘家", "僧侶"];
    let jobNum = job.length;
    console.log( `あなたが選択できる職業の数は${jobNum}つです。` ); 
    // -> あなたが選択できる職業は3つです。
            
console.log('--ループ--'); 
    job = ["戦士", "武闘家", "僧侶"];
    job.forEach(element => {
        console.log(element);
    })
    // -> 戦士
    // -> 武闘家
    // -> 僧侶

    job = ["戦士", "武闘家", "僧侶"];
    job.forEach((element, index) => {
        console.log(`${index}番目の職業は${element}`);
    })
    // -> 0番目の職業は戦士
    // -> 1番目の職業は武闘家
    // -> 2番目の職業は僧侶

console.log('--検索--'); 
    console.log('---indexOf---');
        job = ["戦士", "魔法使い", "魔法戦士"];
        console.log(job.indexOf("戦士")); // -> 0
        console.log(job.indexOf("魔法使い")); // -> 1
        console.log(job.indexOf("魔法戦士")); // -> 2
        console.log(job.indexOf("僧侶")); // -> -1

    console.log('---find---');
        job = ["戦士", "魔法使い", "魔法戦士"];
        let result = job.find(element => element === "戦士");
        console.log(result); // -> 戦士
        
        result = job.find(element => element === "武闘家");
        console.log(result); // -> undefined


console.log('--ソート--');
    const level = [45, 99, 1, 100, 40, 200];
    level.sort();
    console.log(level); // -> Array [1, 100, 200, 40, 45, 99]

    function compare(a, b) {
        if (a < b) { return -1; } //bの順番を遅くする(マイナスする)
        if (a > b) { return 1; } //bを順番を早くする(プラスする)
        return 0;
    }
    
    level.sort(compare);
    console.log(level);　// -> Array [1, 40, 45, 99, 100, 200]


console.log('--コピー(値渡し)--');
    let jobSrc = ["戦士", "武闘家", "勇者"];
    let jobCopy = jobSrc.concat();
    console.log(jobCopy); // -> "戦士", "武闘家", "勇者"

    jobCopy[1]='パラディン';

    console.log(jobSrc); // -> "戦士", "武闘家", "勇者"
    console.log(jobCopy); // -> "戦士", "パラディン", "勇者"
