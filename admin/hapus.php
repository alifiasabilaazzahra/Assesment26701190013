<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$semester = $_GET['semester'];


// menghapus data dari database
mysqli_query($koneksi,"delete from ipk where semester='$semester'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>