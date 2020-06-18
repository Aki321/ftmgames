console.log('-mapメソッド-');

console.log('--配列の各要素を倍にするサンプル--');
    let 攻撃力 = [30, 70, 10];

    let バイキルト = 攻撃力.map(x => x * 2);

    console.log(バイキルト);

    // -> [60, 140, 20]

console.log('--インデックスを扱うサンプル--');
    攻撃力 = [30, 70, 10];

    const バイキルトex = 攻撃力.map((x, i) => x * 2 * i);

    console.log(バイキルトex);

    // -> [0, 140, 40]
    // ⇒30*2*0=0 , 70*2*1=140, 10*2*2=40