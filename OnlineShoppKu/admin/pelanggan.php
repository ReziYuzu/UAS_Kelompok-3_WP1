<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<body>
		<?php $nomor=1;  ?>
		<?php $ambil=$koneksi->query("SELECT * FROM data_pelanggan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['Email']; ?></td>
			<td><?php echo $pecah['Telepon']; ?></td>
			<td>
				<a href="" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</body>
</table>