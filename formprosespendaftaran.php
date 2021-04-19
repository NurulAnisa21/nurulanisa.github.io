<?php

include 'koneksi.php';

	 		$namamahasiswa = $_POST['namamahasiswa'];
			$nomorhandphone=$_POST['nomorhandphone'];
			$nomorrumah = $_POST['nomorrumah'];
			$alamatrumah=$_POST['alamatrumah'];
			$alamatemail =$_POST['alamatemail'];
			$jeniskelamin =$_POST['jeniskelamin'];
			$kelas = $_POST['kelas'];
			$fakultas = $_POST['fakultas'];
			$gelombang =$_POST['gelombang'];
			

mysql_query("INSERT INTO pmb VALUES('','$namamahasiswa','$nomorhandphone','$nomorrumah','$alamatrumah','$alamatemail','$jeniskelamin','$kelas','$fakultas','$gelombang')");
 
 
 header("location:infopendaftaran.php?pesan=input");


?>