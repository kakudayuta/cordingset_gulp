github

https://github.com/kakudayuta/cordingset_gulp.git



# 開発環境立ち上げ
※マシンのグローバル環境にgulpが必要です

## nodeバージョン
12.6.0

## node_modulesインストール
yarn install

必要なモジュールがインストールされます

## 立ち上げコマンド
gulp

コンパイラとlocalhostが立ち上がります

ポート番号は3000と3001です

ブラウザシンクが入っています


node_modules周りは変更しても問題ございません。
差分や行った変更のみ、ご連絡いただけたら嬉しいです。




# コンパイル
基本的には/_src/直下のフォルダが、ディレクトリ直下/に吐き出されます。

/_src/sass/index.scss    =>    /css/index.css

/_src/img/hogehoge.jpg    =>    /img/hogehoge.jpg

/_src/img/top/hogehoge.jpg    =>    /img/top/hogehoge.jpg

/_src/js/index.js    =>    /js/index.js



# 下層ページの制作
https://hogehoge.com/sample/
といった下層ページを作る場合

### /_src/sass/直下に、sample.scssを作成

### JSが必要な場合は/_src/js/直下に、sample.jsを作成

### ディレクトリ直下に/sampleフォルダを作成し、中にindex.phpを作成

といった手順になります。


# このコーディングセットの特徴的な部分
ディレクトリ直下までのパスを、phpの変数「$pas」に格納しています。
CMS化の際に、パスを書き換える手間を省くためです。

こちらはマストでお願いいたします。

使用例)

<img src="<? echo $pas; ?>img/top/mainv01.jpg" width="1980" height="1042" alt="">

<a href="<?=$pas;?>sample/">サンプル</a>


## HTMLの記法について
マストではないのですが、可能であればブロック要素ごとに改行を入れていただけたら、コードの見通しが良いので助かります。


## scssの記法について
・BEM記法が主体です

・どのコーダーさんでも運用フェーズのPDCAを回しやすくしたいという事情もあり、基本的にネストはなしでお願いいたします。該当箇所の修正がしやすく、また該当箇所を見つけやすいので。。

・index.phpや、company.phpなど、ページごとにscssファイルを作ってください

・useやimportするファイルは、ファイル名の最初にアンダーバーをつけてください
例）_import.part.scss

・ベンダープレフィックスはコンパイル時に自動で付与されます


## jsの記法について
基本的にはES5でお願いいたします

特殊な案件（vueやreact等）の場合のみ最新のJSを使用することもありますが、
基本的には使用しません。
