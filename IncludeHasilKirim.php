<?php
if (empty($_POST['nama'])) {
	header("Location:RedirectHasilKirim.php");
} else {
	echo "<center> Nama : ".$_POST['nama']."</center><br>";
}
if (empty($_POST['email'])) {
	header("Location:RedirectHasilKirim.php");
} else {
	echo "<center> Email : ".$_POST['email']."</center>";
}
?>