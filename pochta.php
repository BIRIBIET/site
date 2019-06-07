<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($con, "INSERT INTO projecthuman (email, name, nick, pass) VALUES ('" . $_POST['email'] . "', '" . $_POST['name'] ."', '" . $_POST['nick'] . "' , '" . $_POST['pass'] . "')");
header("Location:http://fromtopcontent/human/vhod.php")
?>

