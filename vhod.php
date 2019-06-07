<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body style="background: #eaeaea">
<div class="row">
	<div class="col-4" style="height: 300px; background: cyan;">
		<img src="" style="width: 250px; margin-left: 80px; margin-top: 20px">
		<form action="proverkavhoda.php" method="POST">
			<input name="email" placeholder="Эл.адрес:" 
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
					opacity: 1;
					margin: auto;">
			<button class="bg-primary text-white" type="submit" style="border: none; border-radius: 3px; width: 280px">Войти</button>
		</form>
<?php echo $_GET['error']?>
	</div>
	<div class="col-4"></div>
</div>
</body>
</html>