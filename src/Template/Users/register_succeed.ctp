<?
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">

<title>無題ドキュメント</title>
</head>

<body>
	<div id="header">

		<h1>しみあついったー</h1>
		<ul>
			<li href="index.php">ホーム</li>
			<li><?
				if(0){
					echo("友だちを検索");
				}else{
					echo("ユーザ登録");
				}
				?></li>
			<li><?
				if(0){
					echo("ログアウト");
				}else{
					echo("ログイン");
				}
				?></li>
		</ul>
	</div>
	<div id="main">
		<h2>ついったーに参加しました。</h2>
		<p> <? print(h($this->request->params['pass'][0])); ?> はついったーに参加しました。</p>
		<p>ログインをクリックしてログインしつぶやいてください。</p>
		<?= $this->Html->link('twitterにログインする',['action'=>'login']); ?>
	</div>
</body>
</html>