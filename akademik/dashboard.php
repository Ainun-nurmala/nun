<!DOCTYPE html>
<html>
<head>
<title>Membuat CRUD Dengan PHP Dan MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">		
<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
<h2>Menampilkan data dari database</h2>
<h3>www.malasngoding.com</h3>
</div>
<br/>
 
<?php 
if(isset($_GET['pesan'])){
$pesan = $_GET['pesan'];
if($pesan == "input"){
echo "Data berhasil di input.";
}else if($pesan == "update"){
echo "Data berhasil di update.";
}else if($pesan == "hapus"){
echo "Data berhasil di hapus.";
}
}
?>
<br/>
<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
<h3>Data user</h3>
<table border="1" class="table">
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Pekerjaan</th>
<th>Opsi</th>		
</tr>
<?php 
include "koneksi.php";
$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
<tr>
<td><?php echo $nomor++; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['pekerjaan']; ?></td>
<td>
<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
</td>
</tr>
<?php } ?>
</table>
</body>
</html>