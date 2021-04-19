<?php
include 'koneksi.php';

			$id = $_POST['id'];
	 		$namamahasiswa = $_POST['namamahasiswa'];
			$nomorhandphone=$_POST['nomorhandphone'];
			$nomorrumah = $_POST['nomorrumah'];
			$alamatrumah=$_POST['alamatrumah'];
			$alamatemail =$_POST['alamatemail'];
			$jeniskelamin =$_POST['jeniskelamin'];
			$kelas = $_POST['kelas'];
			$fakultas = $_POST['fakultas'];
			$gelombang =$_POST['gelombang'];
			

mysql_query ("UPDATE pmb SET namamahasiswa='$namamahasiswa', nomorhandphone='$nomorhandphone', nomorrumah='$nomorrumah', alamatrumah='$alamatrumah', jeniskelamin='$jeniskelamin', kelas='$kelas', fakultas='$fakultas', gelombang='$gelombang' WHERE id='$id'");
  
header("location:dataadmin.php?pesan=update");

?>