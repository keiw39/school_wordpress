# school_wordpress

- WordPress を用いた「TOEFL スクール」の Web サイト構築
- TOP ＋ 下層 8 ページ<br>

※XD デザインカンプからのコーディング

## 実装したサイト

- [Engress](https://works01.k-watanabe39.com/)

BASIC 認証をかけてます。

ID：works<br>
PW：works

### ポイント

- パンくずリストは「Breadcrumb NavXT」を使用
- コンタクトフォームは「MW WP Form」を使用
- 「お知らせ」はカスタム投稿で実装(functions.php へ記述)
- カスタム分類(タクソノミー)は「Custom Post Type UI」で実装
- お客様からも変更しやすく、TOP の事例部分および料金部分はカスタムフィールドで実装(Advanced Custom Fields)
- ページャーはプラグインを使用せず functions.php にて実装
- コンタクトフォームは、全項目入力しないと送信ボタンを押下できないよう設定
- ブログ個別記事の SNS ボタンは「wp_social_bookmarking_light」を使用

## 制作環境について

### Gulp を導入

Gulp を導入することによって下記を全て自動化しています。<br>
※Sass 公式推奨の「Dart Sass」で記述しております

- Sass のコンパイル
- ブラウザシンク(ファイル編集後、ブラウザを更新 → 反映する自動リロードを行う)
- ベンダープレフィックスの付与
- 画像の自動圧縮

#### Gulp の起動

1. gulpfile.js および package.json がある状態で下記コマンドを打つ。

※node_modules および package-lock.json が生成される

```
$ npm i
```

2. gulp 起動の下記コマンドを打つ。

```
$ npx gulp
```

3. gulpfile.js に記述されたタスクが実行されます。

### Gulp を使用した WebP 形式への変換

jpg や png などの画像を、Gulp を使用して WebP へ自動変換しています。

1. WebP 変換の下記コマンドを打つ。

```
$ gulp webp
```

2. 変換終了 →dist フォルダへ保存される

picture 要素を使用して、WebP 対応・非対応のブラウザ環境ごとに WebP とそのほかの画像形式を出し分けている場合、<br>
変換が完了しても読み込まないので、ブラウザをリロードする。<br>
※WebP 非対応のブラウザの場合、jpg や png が優先的に読み込まれるので、その必要はない

## 経緯

[Web制作フリーランサーShogo様](https://note.com/samuraibrass/n/n9faac1c35977)制作のデザインカンプを基に制作させて頂きました。
