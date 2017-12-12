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
		<div class="login-message">
			<div>もうついったーに登録していますか？</div>
			<a href="login.php">ログイン</a>
		</div>
		<div>ついったーに登録しましょう</div>

			<?= $this->Form->create($user); ?>
			<?= $this->Form->input('名前',['name'=>'username','size'=>'20','type'=>'name']); ?>
			<?= $this->Form->input('ID',['name'=>'idname','size'=>'20','type'=>'name']); ?>
			<?= $this->Form->input('パスワード',['name'=>'password','size'=>'20','type'=>'password']); ?>
			<?= $this->Form->input('パスワードの確認',['name'=>'password_affirm','size'=>'20','type'=>'password']); ?>
			<?= $this->Form->input('メールアドレス',['name'=>'email','size'=>'20','type'=>'mail']); ?>
			<?= $this->Form->button('submit'); ?>			
			<?= $this->Form->end(); ?>
			
	</div>
</body>
</html>