<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
<title>無題ドキュメント</title>
</head>

<body>
	<div id="header">
		<h1>ついったー</h1>
		<ul>
			<li link="index">ホーム</li>
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
		<h2>ログイン</h2>
        <?= $this->Form->create(); ?>
			<?= $this->Form->input('ID',['name'=>'idname','size'=>'20','type'=>'name']); ?>
			<?= $this->Form->input('パスワード',['name'=>'password','size'=>'20','type'=>'password']); ?>
			<?= $this->Form->button('login'); ?>
		<?= $this->Form->end(); ?>


	</div>

	<div id="sidebar">
	<h2>ユーザ登録(無料)</h2>
	<a>ユーザ登録</a>
	</div>
</body>
</html>