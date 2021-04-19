<?php 
include 'koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="image/favicon (1).ico">
<link rel="stylesheet" type="text/css" href="css/akademik.css">
  <style>
img {
  width: 100%;
  height: auto;
}
</style>
</head>

<body>

<div class="text-border">
					<center><p><?php // menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];?> </p></center>
</div>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>

<h3>Data Murid</h3>
	<table border="1" class="table">
    
		<tr>
				<th>No</th>	
			<th>Nama Lengkap</th>
            <th>Nomor Handphone</th>
            <th>Nomor Rumah </th>
            <th>Alamat Rumah</th>
            <th>Alamat Email</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Fakultas</th>
            <th>Gelombang</th>
            <th>Opsi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM pmb")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['namamahasiswa']; ?></td>
            <td><?php echo $data['nomorhandphone']; ?></td>
            <td><?php echo $data['nomorrumah']; ?></td>
            <td><?php echo $data['alamatrumah']; ?></td>
            <td><?php echo $data['alamatemail']; ?></td>
            <td><?php echo $data['jeniskelamin']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $data['fakultas']; ?></td>
                <td><?php echo $data['gelombang']; ?></td>
            

			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table><br /><Br />
    
    <!--footer-->
<div class="footer">
              <center>
                <a href="facebook.com"><img class="img-circle" src="images/fb.png"/></a>
                  
                    <a href="facebook.com">
                    <img class="img-circle" src="images/ig.png"/></a>
                  
                    <a href="facebook.com">
                    <img class="img-circle" src="images/linked.jpg"/></a>
                  
                    <a href="facebook.com">
                    <img class="img-circle" src="images/twitter.png"/></a>
                  
                    <a href="facebook.com">
                    <img class="img-circle" src="images/yt.png"/></a>                
  				</center>
     </div>
	
    
    </body></html>