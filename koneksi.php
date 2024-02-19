<?php
$koneksi = mysqli_connect("localhost","root","","kasir 2");

//Check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>