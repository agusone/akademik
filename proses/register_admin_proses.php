<?php 

include '../koneksi.php';

$usernameA= $_POST['username'];
$kode= $_POST['nama'];
$pass= $_POST['password'];
$level = 'admin';

$insert= mysqli_query($koneksi,"INSERT INTO user VALUES ('','$kode','$usernameA','$pass','$level')");

if($insert){
    $pesan="data telah masuk";
    header("location: ../halaman_admin.php?ps=".$pesan);
}else{
    $pesan="data gagal masuk";
    header("location: ../halaman_admin.php?ps=".$pesan);
}
