console.log('-Mapオブジェクト-');

console.log('--宣言・定義⇒要素出力サンプル--');
    console.log('---アロー関数を使った場合---');
        let level = new Map();

        level.set('主人公', 50);
        level.set('ハッサン', 52);
        level.set('ミレーユ', 48);
        
        level.forEach((value, key) => {
            console.log(`${key}のレベルは、${value}です。`);
        });
        
        // -> "主人公のレベルは、50です。"
        // -> "ハッサンのレベルは、52です。"
        // -> "ミレーユのレベルは、48です。"

    console.log('---Function()を使った場合---');
        level = new Map();

        level.set('主人公', 50);
        level.set('ハッサン', 52);
        level.set('ミレーユ', 48);
        
        level.forEach(function(value, key){
            console.log(`${key}のレベルは、${value}です。`);
        });
        
        // -> "主人公のレベルは、50です。"
        // -> "ハッサンのレベルは、52です。"
        // -> "ミレーユのレベルは、48です。"

console.log('--特定のkeyの値を出力させるサンプル--');
    level = new Map();

    level.set('主人公', 50);
    level.set('ハッサン', 52);
    level.set('ミレーユ', 48);

    console.log(level.get('主人公'));

    // -> 50