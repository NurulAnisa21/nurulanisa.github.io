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


<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM pmb WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post" class="modal-content animate">	
    <div class="container">
    <h2>Form Pendaftaran</h2>	
      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">         
      <input type="text" name="namamahasiswa" value="<?php echo $data['namamahasiswa'] ?>"> 
      <input type="text" name="nomorhandphone" value="<?php echo $data['nomorhandphone'] ?>">
      <input type="text" name="nomorrumah" value="<?php echo $data['nomorrumah'] ?>">
      <input type="text" name="alamatrumah" value="<?php echo $data['alamatrumah'] ?>">
      <input type="text" name="alamatemail" value="<?php echo $data['alamatemail'] ?>">
      <input type="text" name="jensikelamin" value="<?php echo $data['jeniskelamin'] ?>">
      <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>">
      <input type="text" name="fakultas" value="<?php echo $data['fakultas'] ?>">
      <input type="text" name="gelombang" value="<?php echo $data['gelombang'] ?>">
      
        
      <button type="submit">Ubah</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="dataadmin.php">Cancel</a></button>
    </div>
  </form>
	<?php } ?>
    
</body>
</html>
