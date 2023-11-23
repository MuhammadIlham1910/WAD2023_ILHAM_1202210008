<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

$host="localhost:3308";
$user="root";
$password="";
$db="modul4_ilham";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>