<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<head>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Aksi</th>
		</tr>
	</head>
	<body>
		<?php $nomor=1;  ?>
		<?php $ambil=$koneksi->query("SELECT * FROM data_pembelian"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['tanggal']; ?></td>
			<td><?php echo $pecah['total']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['no']; ?>" 
				class="btn btn-info">detail</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</body>
</table>