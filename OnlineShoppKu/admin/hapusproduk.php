<?php  

$ambil = $koneksi->query("SELECT * FROM data_produk WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$nama = $pecah['foto_produk'];
if (file_exists("../foto_produk/$nama")) 
{
	unlink("../foto_produk/$nama");
}

$koneksi->query("DELETE FROM data_produk WHERE id='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";

?>