
<?php
include "koneksi.php";
if(isset($_POST['Save'])){
	$nama_karyawan=$_POST['nama_karyawan'];
	$posisi=$_POST['posisi'];
	$masa_cuti=$_POST['masa_cuti'];
	$berakhir=$_POST['berakhir'];
	$untuk=$_POST['untuk'];

$query=mysqli_query($koneksi,"insert into cuti(nama_karyawan,posisi,masa_cuti,berakhir,untuk)
value ('$nama_karyawan',
'$posisi','$masa_cuti','$berakhir','$untuk')");
if($query){
	header("location:tampil_cuti.php");
}else{
	echo mysqli_error();
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>INPUT DATA CUTI KARYAWAN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div class="container">
<body>
SILAHKAN ISI DATA YANG DIBUTUHKAN
</body>
</html>
<form method ="POST">

<table border="1">
	<tr>
		<td>Nama</td>
		<td>Posisi</td>
		<td>Mulai Cuti</td>
		<td>Berakhir Cuti</td>
		<td>Cuti Untuk</td>
	</tr>
	<tr>
		<td><input type="text" name="nama_karyawan"></td>
		<td><select name="posisi">
			<option value="">-----Pilih-----</option>
			<option value="HRD">HRD</option>
			<option value="Produksi">Produksi</option>
			<option value="Marketing">Marketing</option>
		<td><input type="date" name="masa_cuti"></td>
		<td><input type="date" name="berakhir"></td>
		<td><select name="untuk">
			<option value="">-----Pilih-----</option>
			<option value="Nikah">Nikah</option>
			<option value="Haid">Haid</option>
			<option value="Melahirkan">Melahirkan</option>
		</select>
	</td>
		

	</tr>
</table>
<td>
		<button><input type="submit" class="btn btn-primary"name="Save" value="Ajukan Cuti"></button>
		</td>
</div>
		
</form>