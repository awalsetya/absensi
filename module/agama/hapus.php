<?php 
// koneksi database
include './inc/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$query = mysqli_query($koneksi,"DELETE FROM tb_agama WHERE id_agama='$id'");
 
// mengalihkan halaman kembali ke halaman tampil
if($query){
 echo '<script>alert("Data berhasil di hapus"); document.location="index.php?page=agama";</script>';
    }else{
     echo "Data gagal disimpan";
    } 
?>
