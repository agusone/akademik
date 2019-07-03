
<?php


include '../koneksi.php';

$matkul = $_POST['matkul-input'];
$waktu = $_POST['waktu-input'];
$kelas = $_POST['kelas-select'];
$ruangan = $_POST['ruangan-select'];

$insert= mysqli_query($koneksi,"INSERT INTO data_jadwal VALUES ('','$matkul','$waktu','$kelas','$ruangan')");

if($insert){
    $pesan="data telah masuk";
    header("location: ../detail_jadwal.php?ps=".$pesan);
}else{
    $pesan="data gagal masuk";
    header("location: ../detail_jadwal.php?ps=".$pesan);
}

 