<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Empor | Register </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style_register.css">

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><span>Empor</span></div>
		</div>
		<br>
		<div class="register">
			<div class = "message"><i><?= $message ?></i><div>
			<form action="<?= getUrl('save-register') ?>" method="post" accept-charset="utf-8">
				<input class = "name" type="text" name="name" value="" placeholder="Name" />
				<input class = "surname" type="text" name="surname" value="" placeholder="Surname" /><br>
				<input class = "input" type="text" name="email" value="" placeholder="Email" /><br>
				<input type="password" name="password" value="" placeholder="Password" /><br>
				<input type="password" name="comfirmPassword" value="" placeholder="Comfirm Password" /><br>
				<input class = "input" type="text" name="address" value="" placeholder="Address" /><br>
				<input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female<br>
				<button type="submit" value = "Register">Register</button>
			</form>
		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
