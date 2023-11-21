<?php
include './koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_hp = $_POST['no_hp'];
$query = "INSERT INTO partai VALUES (NULL, '$nama', '$email', '$password', '$tanggal_lahir', '$no_hp')";

mysqli_query($koneksi, $query);
echo "<script>alert('data berhasil ditambahkan')</script>"; 
echo "<script>window.location='./index.php'</script>" ?> 
exit;
