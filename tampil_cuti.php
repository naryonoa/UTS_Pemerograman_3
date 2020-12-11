<?php
include "koneksi.php";


?>
<h1>Daftar Karyawan Cuti </h1>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama Karyawan</td>
		<td>Posisi</td>
		<td>Mulai Cuti</td>
		<td>Berakhir Cuti</td>
		<td>Cuti Untuk</td>
		<td>Status</td>
	</tr>
	<?php
		$no=1;
		$query=mysqli_query($koneksi,"select * from cuti");
		while ($list_cuti=mysqli_fetch_array($query)) {
			# code...
		
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $list_cuti['nama_karyawan'];?></td>
		<td><?php echo $list_cuti['posisi'];?></td>
		<td><?php echo $list_cuti['masa_cuti'];?></td>
		<td><?php echo $list_cuti['berakhir'];?></td>
		<td><?php echo $list_cuti['untuk'];?></td>
		<td>Menunggu Persetujuan</td>
	</tr>
<?php } ?>
</table>
