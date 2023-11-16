<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->
<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// <?php

$host="localhost:3308";
$user="root";
$password="";
$db="modul3_wad";

$connect = mysqli_connect($host,$user,$password,$db);  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$connect){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
// 
?>  