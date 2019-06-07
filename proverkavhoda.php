<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'sasha_ch_15');
$query = mysqli_query($con, "SELECT * FROM projecthuman WHERE email = '" . $_POST['email'] ."' AND pass='" . $_POST['pass'] ."' "); 
$res = $query->fetch_assoc();

if ( $query->num_rows == 0) {
	header("Location: http://fromtopcontent/human/vhod.php?error=Ошибка");
}else{
	header("Location: http://fromtopcontent/human/post.php?id=$res[id]");
}
?>