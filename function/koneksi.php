<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "servocity";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($koneksi){
  echo "Koneksi berhasil";
}else{
  echo "Gagal Koneksi";
}