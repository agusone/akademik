<?php 

include '../koneksi.php';

$id = $_POST['id'];
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

if($nama_file !=""){
    $terupload = move_uploaded_file($tmp_file, $path);

    mysqli_query($koneksi,"UPDATE data_mahasiswa SET nama ='$namaLengkap',
   phone='$phone',jenis_kelamin='$jeniskelamin',agama='$agama',tmp_lahir='$tempat_lahir', kelas='$kelas', angkatan='$angkatan',nim = '$nim',
    alamat='$alamat', tgl_lahir='$tanggal', prodi='$prodi',
    img ='$nama_file',
    email='$email' WHERE id='$id'");
  }else{
      mysqli_query($koneksi,"UPDATE data_mahasiswa SET nama ='$namaLengkap',kelas='$kelas', angkatan='$angkatan',nim = '$nim',
      phone='$phone',jenis_kelamin='$jeniskelamin',agama='$agama',tmp_lahir='$tempat_lahir',prodi='$prodi',
       alamat='$alamat', tgl_lahir='$tanggal', 
       
       email='$email' WHERE id='$id'");
  }
    
header('location:../detail_mahasiswa.php');
