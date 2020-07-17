<h2>Ubah Produk</h2>
<?php
$ambil=$koneksi-> query("SELECT * FROM data_produk WHERE id='$_GET[id]'");
$pecah=$ambil-> fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama']; ?>">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga']; ?>">
	</div>
	<div class="form-group">
		<label>Berat (Gr)</label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['berat']; ?>">
	</div>
	<div class="form-group">
		<img src="../foto_produk/<?php echo $pecah['foto'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
{
	$nama=$_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	//jika foto dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../foto_produk/$nama");

		$koneksi->query("UPDATE data_produk SET nama='$_POST[nama]',harga='$_POST[harga]',berat='$_POST[berat]',foto='$nama' WHERE id='$_GET[id]'");
	}
	else{
		$koneksi->query("UPDATE data_produk SET nama='$_POST[nama]',harga='$_POST[harga]',berat='$_POST[berat]', WHERE id='$_GET[id]'");
	}
	echo "<script>alert('Data Produk Telah Diubah');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
}