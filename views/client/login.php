<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Empor | Login </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style_login.css">

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><span>Empor</span></div>
		</div>
		<br>
		<div class="login">
			<div class = "message"><i><?= $message ?></i><div>
			<form action="<?=getUrl('save-login') ?>" method="post" accept-charset="utf-8">
				<input type="text" name="email" value="" placeholder="Email" /><br>
				<input type="password" name="password" value="" placeholder="Password" /><br>
				<button type="submit" value = "Login">Login</button>
			</form>
			<div class="register">
				<i><a href="<?= getUrl('register')?>" title="">Not a member? Join us!</a></i>
			</div>
		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
