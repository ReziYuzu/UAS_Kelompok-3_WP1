<h2>Data Produk</h2>

<table class="table table-bordered">
	<head>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Berat</th>
		<th>Foto</th>
		<th>Aksi</th>
		</tr>
	</head>
	<body>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM data_produk"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['harga']; ?></td>
			<td><?php echo $pecah['berat']; ?></td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['no']; ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['no']; ?>" class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</body>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>