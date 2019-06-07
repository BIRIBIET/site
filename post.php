<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!--Header-->
	<div class="col-12 row px-0 " style="height: 200px;background: red">
		<a href="index.php" class="col-3"><div class="col-12" style="height: 200px; background: cyan"></div></a>
		<div class="col-7" style="height: 200px; background: orange">
			
		</div>
		<div class="col-2 bg-primary">
			<?php   $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, 'SELECT * FROM projecthuman Where id=' . $_GET['id']);
	$res=$query->fetch_assoc();
	echo $res['nick'];
	?>
		</div>
	</div>
	<!--Profile-->
	<!--Slide-->
	<div class="col-12" style="height: 550px; background: green"></div>
	<!--Сравнение-->
	<div class="col-12 row" style="height: 750px; background: yellow">
		<div class="col-1"></div>
		<div class="col-5" style="height: 750px; background: royalblue">
			<div class="col-12 mt-2" style="height: 525px; background: pink"></div>
			<div class="col-12 mt-1" style="height: 200px; background: pink"></div>
		</div>
	<!--<
		<div class="col-1"></div>
		<div class="col-1"></div>
	<!-->
		<div class="col-5" style="height: 750px; background: royalblue;">
			<div class="col-12 mt-2" style="height: 525px; background: pink"></div>
			<div class="col-12 mt-1" style="height: 200px; background: pink"></div>
		</div>
		<div class="col-1"></div>
	</div>
	<!--Топ-->
	<div class="col-12" style="height: 450px; background: orange">
		<div class="col-2" style="height: 450px; background: red"></div>
	</div>
	<!--Пак-->
	<div class="col-12" style="height: 650px; background: cyan"></div>
	<!--Жанры-->
	<div class="col-12  px-0" style="height: 490px; background: blue">
		<div class="col-12 px-0" style="height: 245px; background: #fc01e3; display: flex">
			<div class="col-3" style="height: 245px; background-image: url(images/action.jpg);"></div>
			<div class="col-3" style="height: 245px; background-image: url(images/race.jpg);"></div>
			<div class="col-3" style="height: 245px; background-image: url(images/rpg.jpg);"></div>
			<div class="col-3" style="height: 245px; background-image: url(images/online.jpg);"></div>
		</div>
		<div class="col-12 px-0 " style="height: 245px; background: #fc01e3; display: flex">
			<div class="col-3" style="height: 245px; background-image: url(images/prikluch.jpg);"></div>
			<div class="col-3" style="height: 245px; background-image: url(images/iindi.jpg);"></div>
			<div class="col-3" style="height: 245px; background-image: url(images/strategia.jpg);"></div>
			<div class="col-3" style="height: 245px; background-image: url(images/simulator.jpg);"></div>
		</div>
	</div>
	<!--News-->
	<div class="col-12 bg-danger">
		<form action="news/add.php" method="POST">
			<input name="text">
			<button type="submit" class="btn btn-primary">Добавить</button>
		</form>
	</div>
	

</body>
</html>