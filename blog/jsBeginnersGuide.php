<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>JavaScript入門(Hello World)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f3dff3c59a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.php"><span class="far fa-clock icon"></span> Free Time Games</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php"><span class="fas fa-home"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#listable"><span class="fas fa-gamepad"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#blogs"><span class="fas fa-blog icon"></span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../index.php#aboutcont"><span class="fas fa-book"></span></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>JavaScript入門(Hello World)</h1>
            <div class="history text-right rounded p-1 mb-3 shadow-sm"><i class="fas fa-pencil-alt"></i>2020/6/9 <i class="fas fa-wrench"></i>2020/6/17 <i class="fas fa-user-edit"></i>Aki</div>
            <p>これからJavaScriptの勉強を始めるかたを対象にしています。では、早速はじめていきましょう。</p>

            <h2>WEBブラウザに表示させる</h2>
            <p>まず、基礎の基礎である。WEBブラウザに何でも良いので自分の好きな単語を表示させて見ましょう。</p>

            <h3>準備</h3>
            <p>まず、ディレクトリを作成します。ディレクトリ名はなんでも良いですが、nyumonとしておきましょう。</p>
            <p>次に、”beginner.html”と”beginner.js”という2つのファイルを作成し、ディレクトリに格納します。この2ファイルも拡張子が同じであれば、ファイル名を自由に変更しても問題ありません。</p>

            <div class="content shadow-sm">
                <ul>
                    <li>
                        <i class="far fa-folder-open"></i> nyuumon
                        <ul>
                            <li><i class="far fa-file-alt"></i> beginner.html</li>
                            <li><i class="far fa-file-alt"></i> beginner.js</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <p>beginner.jsファイルにJavaScriptのプログラムを書き込んでいきます。JavaScriptのプログラムを書く前に、beginner.htmlファイルの中身に、下記のように記載してください。(コピペでOK)</p>

            <div class="content shadow-sm">
                <pre><code><?php
$code = 
'<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
</head>

<body>
<script src="beginner.js"></script>        
</body>
</html>';            

echo(htmlentities($code));
?>              </code></pre>
            </div>

            上記を書き終えたら、このHTMLファイルをブラウザで開いてみてください。
            何も表示されないと思います。

            ここまでで、JavaScriptのプログラムを書く準備が整いました。

            <h3>ブラウザに出力</h3>
            <p>次にbeginner.jsの中身にJavaScriptのプログラムを書き込んでいきましょう。下記のように記載してみてください。</p>
            <div class="content shadow-sm">
                <pre><code><?php
$code = 
'document.write("Hello world");';
echo(htmlentities($code));
?>              </code></pre>
            </div>
            <p>保存した後に、先ほど開いたWEBブラウザを更新してみましょう。</p>
            <p>先ほどは、何も出力されていなかったですが、今回はHello worldと表示されていると思います。</p>
            <p>これは、あなたが書いたJavaScriptのプログラムによって出力されています。<p>Hello worldの部分を変更して、別の言葉を出力してみてください。</p>
        </div>
    </main>
</body>
</html>