<?php 
include '../koneksi.php';

if(isset($_POST['tambah'])){


$username = $_POST['username-input'];
$password = $_POST['password-input'];
$nim = $_POST['nim-input'];
$namaLengkap = $_POST['namalengkap-input'];
$phone = $_POST['phone-input'];
$alamat = $_POST['alamat-input'];
$email = $_POST['email-input'];
$jeniskelamin = $_POST['select-jeniskelamin'];
$agama = $_POST['select-agama'];
$tempat_lahir = $_POST['tempat-input'];
$tanggal = $_POST['tanggal-input'];
$kelas = $_POST['select-kelas'];
$angkatan = $_POST['angkatan-input'];
$prodi = $_POST['prodi-input'];
$nama_file = $_FILES["profil"]["name"];
$tmp_file = $_FILES["profil"]["tmp_name"];

$path = "../images/".$nama_file;
$terupload = move_uploaded_file($tmp_file, $path);

 
if($terupload)
{
    $insertuser= mysqli_query($koneksi,"INSERT INTO user VALUES ('','$nim','$username','$password','mahasiswa')");
    $insert =mysqli_query($koneksi,"INSERT INTO data_mahasiswa VALUES('','$nim','$namaLengkap','$phone','$kelas','$alamat','$email','$jeniskelamin','$agama','$tempat_lahir',
    '$tanggal','$angkatan','$prodi','$nama_file')");
    if($insert){
        $pesan="data telah masuk";
        header("location: ../detail_mahasiswa.php?ps=".$pesan);
    }else{
        $pesan="data gagal masuk";
        header("location: dashboard.php?ps=".$pesan);
    }

}else{

    $pesan="data gagal masuk , karena gambar tidak bisa di upload ";
    header("location: dashboard.php?ps=".$pesan);

}


}





?>