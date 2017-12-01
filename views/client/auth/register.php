<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Empor | Register </title>
  <script src="public/js/prefixfree.min.js"></script>
  <link rel="stylesheet" type="text/css" href="public/css/style_register.css">
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
			<form action="<?= getUrl('save-register') ?>" method="post" accept-charset="utf-8" id = "register" >
				<input class = "name"  type="text" name="ten" value="" placeholder="Name" required/>
				<input class = "surname" id = "surname" type="text" name="surname" value="" placeholder="Surname" required /><br>
				<input class = "input" type="text" name="email" value="" placeholder="Email" required /><br>
				<input type="password" id = "password"  name="password" value="" placeholder="Password" required /><br>
				<input type="password"  name="comfirmPassword" value="" placeholder="Comfirm Password" required /><br>
				<input class = "input"  type="text" name="address" value="" placeholder="Address" required /><br>
				<input type="radio" name="gender" value="male" required>Male
				<input type="radio" name="gender" value="female" required>Female<br>
				<button type="submit"  value = "Register">Register</button>
			</form>
		</div>
<script src='public/js/jquery.min.js'></script>
<script src="public/js/jquery.2.2.3.min.js"></script>
<script src="public/js/jquery-1.11.1.min.js"></script>
<script src="public/js/ajax/jquery.validate.min.js"></script>

  <script>
  	$(document).ready(function() {
        $("#register").validate({
            rules: {
                ten: "required",
                surname: "required",
                email:{
                    required: true,
                    email: true
                },
                password:{
                    required: true,
                    minlength: 6,
                    maxlength: 30
                },
                comfirmPassword:{
                    required: true,
                    minlength: 6,
                    maxlength: 30,
                    equalTo: "#password"
                },
                address:{
                    required: true,
                    minlength: 2
                }
                gender: "required"
            },
            messages: {
                ten: "Vui lòng nhập tên",
               surname: "Vui lòng nhập họ",
                email:{
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập đúng định dạng email"
                },
                password:{
                    required: "Vui lòng nhập password",
                    minlength: "Vui lòng nhập password tối thiểu 6 kí tự",
                    maxlength: "Vui lòng nhập password tối đa 30 kí tự"
                },
                comfirmPassword:{
                    required: "Vui lòng nhập lại password",
                    minlength: "Vui lòng nhập password tối thiểu 6 kí tự",
                    maxlength: "Vui lòng nhập password tối đa 30 kí tự",
                    equalTo: "Password không trùng khớp"
                },
                address:{
                    required: "Vui lòng nhập địa chỉ",
                    minlength: "Vui lòng nhập địa chỉ tối thiếu 2 kí tự"
                }
                gender:{
                    required: "Vui lòng chọn giới tính"
                }
            }
        });
    });
  </script>
</body>
</html>
