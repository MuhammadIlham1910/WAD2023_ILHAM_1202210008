<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id=$_GET['id'];
   
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
function updateCar($connect,$id,$nama_mobil,$brand_mobil,$warna_mobil,$tipe_mobil,$harga_mobil){
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $sql="UPDATE showroom_mobil set
        nama_mobil='$nama_mobil',
        brand_mobil='$brand_mobil',
        warna_mobil='$warna_mobil',
        tipe_mobil='$tipe_mobil',
        harga_mobil='$harga_mobil'
        where id=$id";
    // Eksekusi perintah SQL
    $result = mysqli_query($conn, $sql);

        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        if ($result) {
            echo "Data mobil berhasil diperbarui!";
            header("Location: list_mobil.php"); // Redirect to the list page after successful update
            } else {
            // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
            echo "Error updating record: " . mysqli_error($conn);
            }
        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_mobil = $_POST["nama_mobil"];
        $brand_mobil = $_POST["brand_mobil"];
        $warha_mobil = $_POST["warna_mobil"];
        $tipe_mobil = $_POST["tipe_mobil"];
        $harga_mobil =$_POST["harga_mobil"];
        updateCar($conn, $id, $nama_mobil, $brand_mobil, $warna_mobil, $tipe_mobil, $harga_mobil);
}
// Tutup koneksi ke database setelah selesai menggunakan database
    mysqli_close($connect);
}
?>