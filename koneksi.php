<?php

$koneksi = mysqli_connect('localhost', 'root', '', '2106034_paschalhendryawan');

if ($koneksi) {
    // echo "database terhubung";
    echo "<script> alert('database terkoneksi') </script>";
}