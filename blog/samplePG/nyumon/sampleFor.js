//配列
console.log('-for-');

console.log('--要素を取り出すサンプル--');
    let job = ['勇者', '戦士', '武闘家'];

    for (var i = 0; i < job.length; i++) {
        console.log(job[i]);
    }

    // -> "勇者"
    // -> "戦士"
    // -> "武闘家"

console.log('--for in--');
    job = {name:'ハッサン', '職業':'武闘家', '武器':'はかいのてっきゅう', level:30};

    for (const property in job) {
        console.log(`${property}：${job[property]}`);
    }

    // -> "name：ハッサン"
    // -> "職業：武闘家"
    // -> "武器：はかいのてっきゅう"
    // -> "level：30"
    
console.log('--for of--');
    job = ['勇者', '戦士', '武闘家'];

    for (const elem of job) {
        console.log(elem);
    }

    // -> "勇者"
    // -> "戦士"
    // -> "武闘家"

console.log('--Break--');
    job = ['勇者', '戦士', '武闘家'];

    for(var i = 0; i < job.length; i++){
        console.log(job[i]);
        if ( job[i] === "戦士" ) {
            break;
        }
    }

    // -> "勇者"
    // -> "戦士"