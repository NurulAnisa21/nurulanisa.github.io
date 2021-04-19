<?php 
require_once ("koneksi.php");
	$id = $_GET['id'];
mysql_query("DELETE FROM pmb WHERE id='$id'")or die(mysql_error());

header("location:dataadmin.php?pesan=hapus");
?>