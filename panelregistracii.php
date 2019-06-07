<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="col-3" style="height: 250px; background: cyan;">
		<img src="" style="width: 250px; margin-left: 15px; margin-top: 20px">
		<form action="pochta.php" method="POST">
			<input name="email" placeholder="Эл.адрес:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
			<input name="name" placeholder="Имя и фамилия:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
			<input name="nick" placeholder="Имя пользователя:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
			<input name="pass" placeholder="Пароль:" 
					style="margin-bottom: 6px; 
					width: 280px; 
					border-radius: 3px; 
					border-top: white;
					border-left: white;
					opacity: 1;">
			<button class="bg-primary text-white" type="submit" style="border: none; border-radius: 3px; width: 280px">Регистрация</button>
		</form>
	</div>
</body>
</html>