<?php 

include 'koneksi.php';

$semester = $_POST['semester'];

$ipk = $_POST['ipk'];


mysqli_query($koneksi,"insert into ipk values('$semester','$ipk')");


header("location:index.php");

?>