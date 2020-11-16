<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile Admin!</h1>
    <form action="<?php echo base_url(). 'kelola/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>id</td>
				<td><input type="text" name="bangunan_id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="bangunan_nama"></td>
			</tr>
			<tr>
				<td>Bangunan Latitude (X)</td>
				<td><input type="text" name="bangunan_lat"></td>
			</tr>
			<tr>
				<td>Bangunan Longitudional (Y)</td>
				<td><input type="text" name="bangunan_long"></td>
			</tr>
			<tr>
				<td>topografi</td>
				<td><input type="text" name="topografi"></td>
			</tr>
			<tr>
				<td>Jenis lingkungan sekitar</td>
				<td><input type="text" name="lingkungan"></td>
			</tr>
			<tr>
				<td>Fasilitas pendidikan</td>
				<td><input type="text" name="pendidikan"></td>
			</tr>
			<tr>
				<td>Fasilitas kesehatan</td>
				<td><input type="text" name="kesehatan"></td>
			</tr>
			<tr>
				<td>Sarana Prasarana listrik</td>
				<td><input type="text" name="listrik"></td>
			</tr>
			<tr>
				<td>Sarana Prasarana dilewati jalan</td>
				<td><input type="text" name="jalan"></td>
			</tr>
			<tr>
				<td>Sumber Data</td>
				<td><input type="text" name="sumberdata"></td>
			</tr>
			<tr>
				<td>Jenis Data</td>
				<td><input type="text" name="jenisdata"></td>
			</tr>
			<tr>
				<td>Tahun transaksi</td>
				<td><input type="text" name="tahuntransaksi"></td>
			</tr>
			<tr>
				<td>Nomor Sertifikat</td>
				<td><input type="text" name="sertifikat"></td>
			</tr>
			<tr>
				<td>Nilai Indikasi Rata-rata</td>
				<td><input type="text" name="ratarata"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->