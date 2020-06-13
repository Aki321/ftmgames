<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript入門</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="container-small">
                <a href="../index.php" class="headA"><span class="far fa-clock icon"></span> Free Time Games</a>

                <button type="button" class="headC">
                    <span class="fa fa-bars" title="MENU"></span>
                </button>
            </div>

            <nav class="top_menu">
                <ul>
                    <li class="top">
                        <a href="../index.php"><span class="fas fa-home"></span> Top</a>
                    </li>
                    <li class="games">
                        <a href="../index.php"><span class="fas fa-gamepad"></span> Games</a>
                    </li>
                    <li class="about">
                        <a href="../index.php"><span class="fas fa-book"></span> About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <h1>JavaScript入門</h1>
        これからJavaScriptの勉強を始めるかたを対象にしています。では、早速はじめていきましょう。

        <h2>WEBブラウザに表示させる</h2>
        まず、基礎の基礎である。WEBブラウザに何でも良いので自分の好きな単語を表示させて見ましょう。

        <h3>準備</h3>
        まず、ディレクトリを作成します。ディレクトリ名はなんでも良いですが、nyumonとしておきましょう。
        次に2つのファイルを作成します。

        beginner.html
        beginner.js

        beginner.jsファイルにJavaScriptのプログラムを書き込んでいきます。
        JavaScriptのプログラムを書く前に、

        beginner.htmlファイルの中身に、下記のように記載してください。(コピペでOK)

        <pre>
            <code>
                <?php

                $code = '
                <!DOCTYPE html>
                <html lang="ja">
                
                <head>
                    <meta charset="utf-8">
                </head>
                
                <body>
                <script src="beginner.js"></script>        
                </body>
                </html>';            
                
                echo(htmlentities($code));
                ?>
            </code>
        </pre>

        上記を書き終えたら、このHTMLファイルをブラウザで開いてみてください。
        何も表示されないと思います。

        ここまでで、JavaScriptのプログラムを書く準備が整いました。

        <h3>ブラウザに出力</h3>
        次にbeginner.jsの中身にJavaScriptのプログラムを書き込んでいきましょう。

        下記のように記載してみてください。
        <pre>
            <code>
                <?php
                    $code = 'document.write("Hello world");';
                    echo(htmlentities($code));
                ?>
            </code>
        </pre>

        保存した後に、先ほど開いたWEBブラウザを更新してみましょう。

        先ほどは、何も出力されていなかったですが、今回はHello worldと表示されていると思います。
        これをあなたが書いたJavaScriptのプログラムによって出力されています。

        Hello worldの部分を変更して、別の言葉を出力してみてください。

        今回は、ここまで

        

    </main>


</body>
</html>