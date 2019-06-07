	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  projectnews(title,text,img) VALUES('GAMESTORE', '" . $_POST['text'] . "', 'images/background.jpg')");	
	  ?>

	
