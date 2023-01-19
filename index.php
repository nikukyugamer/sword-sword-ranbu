<?php
require_once './h.php';
header('X-FRAME-OPTIONS: SAMEORIGIN');

session_start();

if (! isset($_SESSION['token'])) {
  $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
}
$token = $_SESSION['token'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <!-- designed by starlit * http://sky.starlit.biz/ 2011/p003 //-->
  <title>刀剣乱舞用 スクショ支援ツール とうらぶキャプ 配布ページ</title>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5XKBTLP');</script>
  <!-- End Google Tag Manager -->

  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.ico">
  <link rel="stylesheet" href="style.css" type="text/css">
  <meta content="刀剣乱舞用 スクショ支援ツール 配布ページ" property="og:title"/>
  <meta content="website" property="og:type"/>
  <meta content="https://sword-sword.potch.jp/" property="og:url"/>
  <meta content="https://sword-sword.potch.jp/dsc_08428_600.jpg" property="og:image"/>
  <meta content="summary_large_image" name="twitter:card"/>
  <meta content="https://sword-sword.potch.jp/" name="twitter:site"/>
  <meta content="https://sword-sword.potch.jp/dsc_08428_600.jpg" name="twitter:image"/>
  <meta content="刀剣乱舞用 スクショ支援ツール 配布ページ" name="twitter:title"/>
  <meta content="Windows用の刀剣乱舞スクショ支援ツールを配布しているページです。" name="twitter:description"/>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XKBTLP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- :::::::::::::::::::: ヘッダー :::::::::::::::::::: -->
<div id="header">
<!-- ********** タイトル部分↓ ********** -->
<div class="title">
<h1>とうらぶキャプ 配布ページ</h1>
<p>「刀剣乱舞」のゲーム画面をキャプチャするツール</p>
</div>
<!-- ********** タイトル部分↑ ********** -->
<hr class="dotline"><!-- ライン -->
<!-- ********** メニュー ********** -->
<div id="menu">
<ul>
<!-- メニュー増減はここから↓ -->
<li><img src="img/menu-line.gif" width="1" height="9" alt=""></li>
<li><a href="#download">ダウンロード</a></li>
<li><img src="img/menu-line.gif" width="1" height="9" alt=""></li>
<li><a href="#link">リンク</a></li>
<li><img src="img/menu-line.gif" width="1" height="9" alt=""></li>
<li><a href="#message_form">メッセージ送信フォーム</a></li>
<li><img src="img/menu-line.gif" width="1" height="9" alt=""></li>
<li><a href="#cap_example">キャプチャ画像例</a></li>
<li><img src="img/menu-line.gif" width="1" height="9" alt=""></li>
<!-- メニュー増減ここまで↑ -->
</ul>
</div>
<!-- ********** メニュー以上 ********** -->
<hr class="dotline"><!-- ライン -->
</div>
<!-- :::::::::::::::::::: ヘッダー以上 :::::::::::::::::::: -->

<!-- :::::::::::::::::::: メイン :::::::::::::::::::: -->
<div id="main">
<p style="font-size: 13px;">
「<a href="http://www.dmm.com/netgame_s/tohken/" target="_blank">刀剣乱舞</a>」の画面キャプチャー（スクショ/スクリーンショットを撮影する）ツール、「<em>とうらぶキャプ</em>」を配布しています。
</p>

<a name="download"></a>
<div class="h3"><h3><strong>ダウンロード</strong></h3></div>
<ul class="download">
<li>
<a href="./TouLoveCap_Ver_2_1_2.zip" onclick="ga('send','pageview','/TouLoveCap/TouLoveCap_Ver_2_1_2.zip');">最新版ダウンロード</a> / Version 2.1.2 (2022/09/11)
</li>
</ul>
<p></p>

<div class="h3"><h3><strong>対応Webブラウザ</strong></h3></div>
<p>Google Chrome / Mozilla Firefox / Microsoft Edge</p>

<div class="h3"><h3><strong>諸注意</strong></h3></div>
<p>
※本ツールはWindowsの画面キャプチャの機能およびその画像を切り抜く機能を単純化したツールであり、刀剣乱舞のサーバに対してアクセスは行っておりません。
</p>

<a name="message_form"></a>
<div class="h3"><h3><strong>メッセージ送信フォーム</strong></h3></div>
<ul class="message_form_attention">
<li>・メッセージ送信フォームを <a href="https://ws.formzu.net/fgen/S4145913/" target="_blank">こちら</a>に用意しました（「フォームズ」を利用しています）。</li>
<li>・不具合報告、ご要望、叱咤激励、雑談、などなど、何でもどうぞ。できる限り対応いたします。</li>
<li>・まだ領域認識の不具合が残っているようです。修正をしたいと思いますのでご報告をお願い致します。</li>
<li>・ご報告の際には不具合内容とともに次の項目があるとありがたいです（必須ではありません）。</li>
<li>→「ソフトのバージョン」「Webブラウザの名前とバージョン」「OSのバージョン」「エラーメッセージ（あれば）」</li>
</ul>
<p></p>

<p>――――――――――</p>

<p>
<span style="font-weight: bold;">[2023/01/19]</span>
<br>
「撮影領域（ｙ）が正しく取得できませんでした。」のエラーが出てしまうというメッセージを頂きました。
<br>
手元で試してみたところ再現せず、現在のところ原因が分かっておりません。
<br>
同様の現象が起きている方がおられましたら、ご報告いただけると幸いです。
</p>

<p>
<span style="font-weight: bold;">[2023/01/16]</span>
<br>
8周年おめでとうございます。
<br>
昨年にも増して今年は時間を確保するのが難しそうですが、それを言い訳にはしたくないので、少しずつでも更新していきたいと思います。
</p>

<p>
<span style="font-weight: bold;">[2022/09/11]</span>
<br>
        Version 2.1.2 をリリースしました。
<br>
        ・Firefox でキャプチャできない不具合を修正しました
<br>
        ・メニューの「情報」→「とうらぶきゃぷ配布ページへ」で飛ぶことができるURLを最新のURLに変更しました。
<br><br>
        「白い斑点」について JPEG画像 をご提供いただきました。PNG特有の問題ではなく、キャプチャ時の問題であることがわかりました。一歩前進です。
<br><br>
        また、デスクトップの拡大率が 100% 以外でもキャプチャできるようにする方法を検証しています。DPI を取得できればいいところ、7年前の開発環境の下では DPI の取得が難しい状況です。当時は拡大している人はあまりいなかったし、マルチモニタもそこまで普及していなかったはずで、スマートに取得している例が見つかりません。
<br><br>
        モダンな開発環境に一新したいところではありますが、地味な移行作業を結構なボリュームでやる必要があり、継続できるかどうかの懸念があります。しばらく触らないで久々に触るという場合には内容を綺麗さっぱり忘れてしまっており、作業のスイッチングコストが大変に高いため、やるのだとしたら一気にやりたいのです。
</p>

<p>
<span style="font-weight: bold;">[2022/09/08]</span>
<br>
        「白い斑点」が入ることがある現象について、発生時の画像をご提供いただきました。ありがとうございます。画像を見て、png保存時の透過処理が適切でない可能性をまず思いつきました。JPEGで保存した場合にも同じ状況になるかどうかを確かめたいところです。
</p>

<p>
<span style="font-weight: bold;">[2022/09/07]</span>
<br>
        Version 2.1.1 をリリースしました。2022/08/29 のメンテ以降にウィンドウが見つからなくなる不具合を修正しました。ご不便をおかけして申し訳ありませんでした。
</p>

<p>
<span style="font-weight: bold;">[2022/08/29]</span>
<br>
        不具合のご報告ありがとうございます。なるはやで修正いたします。
</p>

<p>
<span style="font-weight: bold;">[2022/01/14]</span>
<br>
        7周年おめでとうございます。また、頂いた内容（すべて読んでおります）や更新が滞っており申し訳ございません。
</p>

<p>
<span style="font-weight: bold;">[2021/03/07]</span>
<br>
        ブラウザの拡張機能で作り直そう（リニューアルしよう）と調査をしていたのですが、ゲーム画面の表示方法の関係上、やはり Windows 専用のアプリケーションとして作るしか無いようです。技術的な調査をもう少し続けます。
</p>

<p>
<span style="font-weight: bold;">[2020/12/06]</span>
<br>
        早いものでもう今年も12月になってしまいました。いくつかのご報告を頂いており、大変感謝しております。年末年始は少し穏やかになりそうなので、そのときに着手しようと考えております。末永くお使い頂きとても嬉しいです。
</p>

<p>
<span style="font-weight: bold;">[2020/05/12]</span>
<br>
        キャプチャ画像に白い斑点が入り込む件ですが、こちらでは再現せず引き続き確認中です。
</p>

<p>
<span style="font-weight: bold;">[2020/05/07]</span>
<br>
        キャプチャ画像に白い斑点が入り込むという報告を頂いております。現在確認中です。
</p>

<p>
<span style="font-weight: bold;">[2020/05/04]</span>
<br>
        エア C98 の 2日目 も終わりました。さて、本サイトは6月末までに移転します。以降は現アドレスではアクセスができなくなります（しばらく残しておく可能性はあります）。詳細はまたご連絡いたします。
</p>

<p>
<span style="font-weight: bold;">[2020/03/08]</span>
<br>
        C98 まであと2ヶ月弱ですね。当落が出るまでドキドキしています。
</p>

<p>
<span style="font-weight: bold;">[2020/01/13]</span>
<br>
        <a href="https://magazineworld.jp/brutus/brutus-908/" target="_blank">Brutus の特集号</a> を買いました。これは永久保存版でしょう。あ、あと C98 に申し込みました。当選の暁にはよろしくお願いします。
</p>

<p>
<span style="font-weight: bold;">[2019/12/17]</span>
<br>
<a href="https://magazineworld.jp/brutus/brutus-next-907/" target="_blank">2020/1/11 発売の Brutus にて「刀剣乱舞」の特集が組まれるとのことです</a>。各種ストアでは予約を受け付けていますので、購入予定の方はお早めにどうぞ（私は早速ポチりました）。
</p>

<p>
<span style="font-weight: bold;">[2019/11/28]</span>
<br>
残念ながら冬コミには落選してしまったため、いろいろ予定していた頒布物の頒布機会が見送られました。当面はまたネット経由のみとなります。
</p>

<p>
<span style="font-weight: bold;">[2019/10/24]</span>
<br>
<a href="https://honmaruhaku2020.jp/" target="_blank">「刀剣乱舞-本丸博-2020」</a> の開催が決定し、さっそく明日の昼から始まる先行抽選に応募しようと思います。もう5周年にもなるんですね。
</p>

<p>
<span style="font-weight: bold;">[2019/10/23]</span>
<br>
次バージョンから、Chrome や Firefox、Edge の「拡張機能」としてリリースしようとも考え始めました。IE が正式に非対応になったため、「拡張機能」形式でリリースしてもほぼ全ての人が使える（Macも！）と思うからです。慎重に検討しています。
</p>

<p>
<span style="font-weight: bold;">[2019/10/14]</span>
<br>
画面の拡大率が100%でないとキャプチャできない仕様について、変更を進めています。今や2つや3つのモニタを用いることは珍しくなくなり、画面の拡大率が100%でないことも珍しくはないからです。進捗があり次第、またご連絡します（目標としては冬コミリリース（頒布）です）。
</p>

<p>
<span style="font-weight: bold;">[2019/08/29 その2]</span>
<br>
以下の点を修正・変更した <a href="./TouLoveCap_Ver_2_1_0.zip" onclick="ga('send','pageview','/TouLoveCap/TouLoveCap_Ver_2_1_0.zip');">バージョン 2.1.0</a> をリリースしました。
</p>
<p>
・一部の環境で起動時にエラーが出る不具合を修正した。
<br>
・対応ブラウザからInternet Explorerを削除した。
<br>
・ソフトウェア内部のバージョン番号を2.1.0として正しく設定した。
<br>
・2019年8月の一般的なマシン環境を考慮し「高速モード」を削除した。
<br>
・「配布サイト」へのリンクのURLのスキームをhttpからhttpsに変更した。
</p>

「審神者を隠す」の部分については調整中です。<br><br>

<span style="font-weight: bold;">「高速モード」を ON にした状態で本バージョンにバージョンアップした場合、その情報が内部的に残ってしまって期待されない動作をする可能性があります。その際は「README_設定を削除したい場合.txt」を読み、設定をいったん削除して下さい。ただし、他の設定項目もリセットされますのでご承知ください。</span>
<br><br>

<p>
<span style="font-weight: bold;">[2019/08/29 その1]</span>
<br>
キャプチャをすると画像の領域がずれてしまうことがある問題ですが、「高速モード」のチェックを外すと回避できる場合があります。初リリース時の一部のマシンではスペックの関係上、キャプチャに時間がかかることがありこのモードをつけたのですが、現在ではもはや不要の機能であり無用な不具合を生む原因ともなっていますので、次版では削除します。
</p>

<p>
<span style="font-weight: bold;">[2019/08/26]</span>
<br>
いくつかバグ報告をいただき、修正対応中です。もう少々お待ち下さい。いつもご連絡ありがとうございます。
</p>

<p>
<span style="font-weight: bold;">[2019/07/28]</span>
<br>
ありがたいことに<a href="https://forest.watch.impress.co.jp/docs/news/1197695.html" target="_blank">窓の杜に記事が掲載されました</a>。HTML5版 への対応を最優先にしたのでその他の部分ではまだ手が届いていないところがありますが、順次直していきます。あと、本ページを近く移転する予定ですのでよろしくお願いします。しばらくはこのページから自動で新ページに飛ぶようにするので、特に何かをする必要はありません。
</p>

<p>
<span style="font-weight: bold;">[2019/07/22]</span>
<br>
お待たせしました。HTML5版 に対応した バージョン 2.0.0 をリリースしました！ ダウンロードは <a href="TouLoveCap_Ver_2_0_0.zip">こちらからどうぞ。</a> なお、Flash版 も消さずに置いてありますので、ご都合の良い方をご利用下さい。なお、HTML5版 では「審神者を隠す」によるキャプチャの黒塗り部分が大幅にズレており、修正予定です。
</p>

<p>
<span style="font-weight: bold;">[2019/06/30]</span>
<br>
Flash版のサービスが今夏に終了とのことで、HTML5版に対応したバージョンをリリース予定です。今しばらくお待ち下さい……。
</p>

<p>
<span style="font-weight: bold;">[2018/05/06]</span>
<br>
お待たせしました！キャプチャできない不具合を修正した v1.4.0 をリリースしました！<a href="TouLoveCap_Ver_1_4_0.zip">こちらより</a>ダウンロードしてください。長らくご不便をおかけして申し訳ございませんでした。
</p>

<p>
<span style="font-weight: bold;">[2018/04/24]</span>
<br>
フォームよりご連絡を頂いており、ありがとうございます。連休中に修正します。リリースをしてから3年も経つのですが、長く使ってもらって頂き本当に嬉しいです。
</p>

<p>
<span style="font-weight: bold;">[2018/03/24]</span>
<br>
↓のようなことを言っておきながら凄まじい時間が経過してしまいました……。私自身もなかなか動きがないソフトに対してじれったさを感じることがあるのですが、今はその作者の気持ちが分かる気がします（という言い訳）。
<br><br>
とは言え、開発をやめるということはしませんので、適当に気にかけていただければなとも思っています。仕様の変更に追従したいです。
<br><br>
<a href="http://news.denfaminicogamer.jp/kikakuthetower/180323" target="_blank">電ファミニコゲーマーに記事が載り</a>、改めて刀剣乱舞が大きくなったなということを感じさせられます。その盛り上がりにほんの1mmでも協力できたとしたならば大変に幸せなことです。
</p>

<p>
<span style="font-weight: bold;">[2017/09/18]</span> 何もできぬまま時間が過ぎてしまっていて申し訳ございません。いろいろ、いろいろ見直したいところがありますので、時間を取って調べます。ご報告ありがとうございます。
</p>

<p>
<span style="font-weight: bold;">[2017/08/06]</span> 不具合の検証についてのご報告、大感謝です。正直、一つ機能を修正したり追加したりするために全てのWebブラウザでテストしてからとなるため、時間がかかってしまうこともあるのです。その前に具体的に場合を切り分けられると、負担が減って助かります。
</p>

<p>
<span style="font-weight: bold;">[2017/08/03]</span> いつも不具合のご報告ありがとうございます。少々お待ち下さい……
</p>

<p>
<span style="font-weight: bold;">[2017/07/21]</span> Version 1.3.1 をリリースしました！DMM の仕様変更に対する緊急の対応ということで、実行ファイルのみの配布となっています。後ほど、ドキュメントを含めた正式なパッケージをリリースします。いつも迅速なご報告を頂き、とてもありがたいです。
</p>

<p>
<span style="font-weight: bold;">[2017/02/09]</span> いつもバグ報告を頂きありがとうございます。再現が難しい場合もあり、なかなかすぐに対応というわけにはいきませんが、時間を見つけて対応していきたいと考えていますのでお待ち頂ければ幸いです。ちなみに冬コミでは、公式のグッズ詰め合わせに花丸のブランケットとクッションを買いました( ◠‿◠ )<img src="dsc_08428_600.jpg">
</p>

<p>
<span style="font-weight: bold;">[2016/12/18]</span> Version 1.3.0 をリリースしました！Microsoft Edge に対応しました。クリスマスプレゼントとして間に合ったでしょうか。あと、冬コミは見事に落ちました(´；ω；｀)
<div class="psychedelica" style="font-size: 10px;">※最近はサイケデリカにハマってます</div>
<img src="psychedelica.jpg">
</p>


<p>
<span style="font-weight: bold;">[2016/09/20]</span> Norton や Avast! などでウィルス誤検出されてしまう方は、いわゆる「除外リスト（的なもの）」に入れてご利用ください。誤検出されるようなコードは書いていないのですが（ここは信じていただくしか…）、ブラウザ周りのチェックをしていることでひっかかっているのかもしれません。
</p>

<p>
<span style="font-weight: bold;">[2016/09/19]</span> お待たせしました！ブラウザの検出部分を修正した Version 1.2.1.0 をリリースしました！この度はご不便をおかけして大変申し訳ありませでした。
</p>

<p>
※アニメといいVRといい楽しみな展開がまだまだ続きそうですね。私もこのソフトを含めいろいろ創作したいのですが、仕事の方がちょっと忙しくて（…ってのは見苦しい言い訳ですが）。とにもかくにもとうらぶの更なる盛り上がりを期待しています！<div style="font-size:0.7em">バンケツにも手を出したい…</div>
</p>

<div class="h3"><h3><strong>ソフトウェア外観</strong></h3></div>
<img src="./tlc_ss_01.png"> <img src="./tlc_ss_02.png">
<p></p><!-- 間隔調整の空のタグ -->

<!-- <div class="h3"><h3><strong>主な改版履歴</strong></h3></div> -->
<!--
<p>
<em>Version X.X.X.X (2016/02/29)</em><br>
近くURLの変更を伴ったWebサイトの大幅な更新を予定しています。しばらくはリダイレクトで対応しますので特に利用する側での対応は必要はございません。</br>
また、更新が滞っておりご迷惑をお掛けしております。今しばらくお待ち下さい。明日は「ポケット」のリリース日ですね！
</p>
-->

<!-- <p>
<em>Version 1.3.0 (2016/12/18)</em><br>
Microsoft Edge に対応した。<br>
バージョン表記を X.X.X 形式に変更した。
</p>

<p>
<em>Version 1.2.1.0 (2016/09/19)</em><br>
ウェブページのタイトル部分で「DMM.com」であったものが「DMM GAMES」に変更されたことによるブラウザ不認識に対応。
</p>

<p>
<em>Version 1.2.0.0 (2015/05/03)</em><br>
ChromeとFirefoxで、「常に手前に表示」の機能が撮影後に無効になってしまう不具合を修正した（Thanks to Webページからのメッセージ）。</br>
コピーライトの部分のフォントサイズが大きくなったのに対応した。
</p> -->

<a name="link"></a>
<div class="h3"><h3><strong>リンク</strong></h3></div>
<p>
<a href="../SaniwaTimer/" target="_blank">さにわタイマー for Windows 配布ページ</a> : 姉妹ソフト（？）の「さにわタイマー for Windows」の配布ページです。
</p>

<a name="form_answer"></a>
<div class="h3"><h3><strong>フォームメッセージに対する回答</strong></h3></div>
<p>
フォームからお送りいただきましたメッセージに対する回答です。
</p>
<ul class="form_answer_list">
<li>Q.Chromeの「demado」などの拡張を利用した状態でキャプチャできますか？</li>
<li>A.現在（2015/06/16）未対応ですが、対応を検討したいと思います。</li>
<li>　</li>
<li>Q.「デスクトップに作成したショートカットから刀剣乱舞を開くと、とうらぶキャプがウインドウを認識してくれない」</li>
<li>A.修正しましたが、まだ起動できないケースもあるようです。従来の情報に「<em>タスクバーに表示されているIEの表示名</em>」を加えて（例：「<em>刀剣乱舞-ONLINE- - オンラインゲーム - DMM GAMES - Internet Explorer</em>」）ご報告をいただけると幸いです。</li>
<li>　</li>
<li>Q.「起動しようとしたところ、Nortonが反応しました」</li>
<li>A.誤検出ですので問題ありません（ここは信じてとしか…）。</li>
<li>　</li>
<li>Q.「『審神者を隠す』にチェックした場合、どのゲーム画面でも黒枠が表示されてしまいます」</li>
<li>A.「審神者を隠す」機能は場面を見て隠しているわけではなく、チェックが入っていればどの画面でも隠す仕様です。お手数ですが「審神者を隠す」場合にのみチェックを入れ、撮影し終わったらチェックを外してください。</li>
</ul>
<p></p>

<a name="cap_example"></a>
<div class="h3"><h3><strong>キャプチャ画像例</strong></h3></div>
</div>
<!-- :::::::::::::::::::: メイン以上 :::::::::::::::::::: -->
<img src="./TouLoveCap_01.jpg"><br />
<img src="./TouLoveCap_02.jpg"><br />
<img src="./TouLoveCap_03.jpg"><br />

<!-- :::::::::::::::::::: フッター :::::::::::::::::::: -->
<div id="footer">
<hr class="dotline"><!-- ライン -->
<p class="bar">とうらぶキャプ</p>
<hr class="dotline"><!-- ライン -->
<!-- ***** 下部メニュー ***** -->
<ul>
<li>│</li>
<li><a href="#download">ダウンロード</a></li>
<li>│</li>
<li><a href="#link">リンク</a></li>
<li>│</li>
<li><a href="#message_form">メッセージ送信フォーム</a></li>
<li>│</li>
<li><a href="#cap_example">キャプチャ画像例</a></li>
<li>│</li>
</ul>
<!-- ***** 下部メニュー ***** -->
<p></p>
<!-- 著作権表示 -->
<address>-<a href="http://sky.starlit.biz/" target="_blank">Template by Starlit</a>-</address>
</div>
<!-- :::::::::::::::::::: フッター以上 :::::::::::::::::::: -->

</body>
</html>
