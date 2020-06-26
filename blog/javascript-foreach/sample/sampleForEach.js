//配列
console.log('-forEach-');

console.log('--要素を取り出すサンプル--');
    let job = ['勇者', '戦士', '武闘家'];

    job.forEach(elem => console.log(elem));

    // -> "勇者"
    // -> "戦士"
    // -> "武闘家"
    
console.log('--要素とインデックスを取り出すサンプル--');
    job = ['勇者', '戦士', '武闘家'];

    job.forEach((elem, index) => {
        console.log(`[${index}]インデックスの要素は[${elem}]`);
    });

    // -> "[0]インデックスの要素は[勇者]"
    // -> "[1]インデックスの要素は[戦士]"
    // -> "[2]インデックスの要素は[武闘家]"

console.log('--Breakは扱えない--');
    console.log('---エラーサンプル---');
        /*
        job = ['勇者', '戦士', '武闘家'];

        job.forEach(elem => {
            console.log(elem);
            if ( elem === "戦士" ) {
                break;
            }
        });

        // -> Error: Illegal break statement
        */


    console.log('---代替サンプル---');
        job = ['勇者', '戦士', '武闘家'];

        for(var i = 0; i < job.length; i++){
            console.log(job[i]);
            if ( job[i] === "戦士" ) {
                break;
            }
        }
        
        // -> "勇者"
        // -> "戦士"

console.log('--continueは扱えない--');
    console.log('---エラーサンプル---');
        /*
        job = ['勇者', '戦士', '武闘家'];

        job.forEach(element => {
            if(element === "戦士"){
                continue;
            }
            console.log(element);
        });

        // -> Error: Illegal continue statement: no surrounding iteration statement
        */

    console.log('---代替サンプル---');
        job = ['勇者', '戦士', '武闘家'];

        job.forEach(element => {
            if(element === "戦士"){
                return;
            }
            console.log(element);
        });
        
        // -> "勇者"
        // -> "武闘家"

console.log('--連想配列--');
    job = {'主人公':'勇者', 'ハッサン':'戦士', 'ミレーユ':'武闘家'};

    const chara = Object.keys(job);
    console.log(chara);

    chara.forEach(elem => {
        console.log(`${elem}の職業は[${job[elem]}]`)
    });

    // -> Array ["主人公", "ハッサン", "ミレーユ"]
    // -> "主人公の職業は[勇者]"
    // -> "ハッサンの職業は[戦士]"
    // -> "ミレーユの職業は[武闘家]"
