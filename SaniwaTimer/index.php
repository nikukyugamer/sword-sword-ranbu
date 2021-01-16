<?php
require_once './h.php';
header('X-FRAME-OPTIONS: SAMEORIGIN');

session_start();

if (! isset($_SESSION['token'])) {
	$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
}
$token = $_SESSION['token'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--link rel="shortcut icon" href="favicon.ico"-->
<title>さにわタイマー for Windows 配布ページ</title>
</head>
<body bgcolor="#F0F8FF">
<h2>さにわタイマー for Windows 配布ページ</h2>
<p>素敵な闇Webアプリである「<a href="http://millefeui.net/dev/timer/" target="_blank">さにわタイマー</a>」を、Windows用のアプリケーションソフトとして作成したものを配布しています。</p>
<p><a href="./SaniwaTimerWin_Ver_1_0_0_0.zip" onclick="ga('send','pageview','/SaniwaTimer/SaniwaTimerWin_Ver_1_0_0_0.zip');">最新版ダウンロード</a> Version 1.0.0.0 (2015/05/03) / 要 .NET Framework 4（Windows 7以降ならば問題なく動作）</p>
<p>素材の提供を快く承諾して下さった<a href="http://twitter.com/rokuremix" target="_blank">@rokuremix</a>様、原Webアプリ開発者の<a href="http://twitter.com/millefeui" target="_blank">@millefeui</a>様には多大なる感謝と御礼を申し上げます。</p>
<img src="SaniwaTimer_03.jpg">
<hr />

<div id="history_title" style="line-height:140%;">＜主な改版履歴＞</div>
<div id="history_version" style="line-height:140%;font-weight:bold;">Version 1.0.0.0 (2015/05/03)</div>
<div id="history_contents_00" style="line-height:140%;">00:00:00になった際に任意の音声ファイルを再生できるようにした。</div>
<div id="history_version" style="line-height:140%;font-weight:bold;">Version 0.5.0.0 (2015/03/27)</div>
<div id="history_contents_01" style="line-height:140%;">表示文字列に任意の文字列を設定できるようにした。右クリックのメニュー項目を全般的に追加・修正した。</div>
<div id="history_ver_01" style="line-height:140%;font-weight:bold;">Version 0.1.0.1 (2015/02/26)</div>
<div id="history_contents_01" style="line-height:140%;">表示文字を「〆切」「待機列」「定時」から選べるようにしました。フォントの変更をしました。その他細かい内部処理の修正をしました。</div>
<div id="history_ver_02" style="line-height:140%;font-weight:bold;">Version 0.0.0.6 (2015/02/25)</div>
<div id="history_contents_02" style="line-height:140%;">背景画像が表示されないという最凶バグを修正しました。ほんとごめんなさい。</div>
<hr />

<div id="mailbox">
	<h3>メッセージ送信フォーム</h3>
<?php
// エラーがあったら表示
if (isset($_SESSION['error'])) {
	foreach ($_SESSION['error'] as $value) {
		echo '<span style="color:red;">' . h($value) . '</span><br>' . "\n";
	}
}

// 三項演算子を使用してセッションに保存されたデータを変数に代入
$comment = isset($_SESSION['comment']) ? $_SESSION['comment'] : '';
?>
<div id="form_contents_01" style="line-height:140%;">不具合報告、ご要望、叱咤激励、雑談、などなど、何でもどうぞ。できる限り対応いたします。</div>
<div id="form_contents_03" style="line-height:140%;">不具合報告の場合には、不具合内容とともに次の項目があるとありがたいです。</div>
<div id="form_contents_04" style="line-height:140%;">「ソフトのバージョン」「OSのバージョン」「エラーメッセージ（あれば）」</div>
  <form action="mailform_confirm.php" method="post">
    <dl>
      <dt><label for="comment">メッセージ内容</label></dt>
      <dd><textarea rows="6" cols="60" id="comment" name="comment" 
          maxlength="10000" required><?php echo h($comment); ?></textarea></dd>
    </dl>
    <input type="hidden" name="token" value="<?php echo h($token); ?>">
    <input type="submit" name="submit" value="入力内容チェック">
  </form>
</div>

<hr />

<a href="../TouLoveCap/">とうらぶキャプ 配布ページ へ</a>

<!-- analytics.php START -->
<script type="text/javascript" src="http://rhapsodia.thyme.jp/analytics.php"></script>
<!-- analytics.php END -->
<!-- Google Analytics START -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49421871-3', 'auto');

	ga('set', 'dimension1', setAnalytics.getIP());
	ga('set', 'dimension2', setAnalytics.getCookie());
	ga('set', 'dimension3', setAnalytics.getAccessTime());

  ga('send', 'pageview');

</script>
<!-- Google Analytics END -->

</body>
</html>
