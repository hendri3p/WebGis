<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile Admin!</h1>
	<center><?php echo anchor('kelola/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Latitude</th>
            <th>Longitude</th>
            <th>Topografi</th>
            <th>Lingkungan</th>
            <th>Pendidikan</th>
            <th>Kesehatan</th>
            <th>Listrik</th>
            <th>Jalan</th>
            <th>Sumber Data</th>
            <th>Jenis Data</th>
            <th>Tahun Transaksi</th>
            <th>Sertifikat</th>
            <th>Rata-Rata</th>
            <th>Foto</th>
            <th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($bangunan as $u){ 
		?>
		<tr>
			<td><?php echo $u->bangunan_id ?></td>
			<td><?php echo $u->bangunan_nama ?></td>
			<td><?php echo $u->bangunan_lat ?></td>
            <td><?php echo $u->bangunan_long ?></td>
            <td><?php echo $u->topografi ?></td>
            <td><?php echo $u->lingkungan ?></td>
            <td><?php echo $u->pendidikan ?></td>
            <td><?php echo $u->kesehatan ?></td>
            <td><?php echo $u->listrik ?></td>
            <td><?php echo $u->jalan ?></td>
            <td><?php echo $u->sumberdata ?></td>
            <td><?php echo $u->jenisdata ?></td>
            <td><?php echo $u->tahuntransaksi ?></td>
            <td><?php echo $u->sertifikat ?></td>
            <td><?php echo $u->ratarata ?></td>
            <td><?php echo $u->Foto ?></td>
			<td>
			      <?php echo anchor('kelola/edit/'.$u->bangunan_id,'Edit'); ?>
                    <?php echo anchor('kelola/hapus/'.$u->bangunan_id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->