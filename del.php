<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($connect, "DELETE FROM projectnews WHERE id = '" . $_POST['id'] . "'");

?>