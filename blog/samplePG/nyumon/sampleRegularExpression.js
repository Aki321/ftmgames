console.log('-JavaScript正規表現-');

console.log('--正規表現があると何がうれしいのか？--');
    console.log('---正規表現を使わないサンプル---');

        let magic = ["メラ", "メラミ", "メラゾーマ", "ギラ", "ベギラマ", "ベギラゴン"];
        magic.forEach(elem => {
            if (elem == "メラ" || elem == "メラミ" || elem == "メラゾーマ") {
                console.log(elem);
            }
        });

        // -> "メラ"
        // -> "メラミ"
        // -> "メラゾーマ"

        console.log('---正規表現を使ったサンプル---');

        magic = ["メラ", "メラミ", "メラゾーマ", "ギラ", "ベギラマ", "ベギラゴン"];
        magic.forEach(elem => {
            //console.log(`Match結果は、${elem.match(/^メラ/)}`);
            if ( elem.match(/^メラ/) != null ) {
                console.log(elem);
            }
        });

        // -> "メラ"
        // -> "メラミ"
        // -> "メラゾーマ"


