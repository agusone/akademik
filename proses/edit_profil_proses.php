<?php 
 include '../koneksi.php';
 
 
 $nim = $_POST['input-nim'];
 $namaLengkap = $_POST['namalengkap-input'];
 $phone = $_POST['phone-input'];
 $alamat = $_POST['alamat-input'];
 $email = $_POST['email-input'];
 $jeniskelamin = $_POST['select-jeniskelamin'];
 $agama = $_POST['select-agama'];
 $tempat_lahir = $_POST['tempat-input'];
 $tanggal = $_POST['tanggal-input'];
 $nama_file = $_FILES["profil"]["name"];
 $tmp_file = $_FILES["profil"]["tmp_name"];
 
 $path = "../images/".$nama_file;
 

    if($nama_file !=""){
      $terupload = move_uploaded_file($tmp_file, $path);

      mysqli_query($koneksi,"UPDATE data_mahasiswa SET nama ='$namaLengkap',
     phone='$phone',jenis_kelamin='$jeniskelamin',agama='$agama',tmp_lahir='$tempat_lahir',
      alamat='$alamat', tgl_lahir='$tanggal', 
      img ='$nama_file',
      email='$email' WHERE nim='$nim'");
    }else{
        mysqli_query($koneksi,"UPDATE data_mahasiswa SET nama ='$namaLengkap',
        phone='$phone',jenis_kelamin='$jeniskelamin',agama='$agama',tmp_lahir='$tempat_lahir',
         alamat='$alamat', tgl_lahir='$tanggal', 
         
         email='$email' WHERE nim='$nim'");
    }
      
header('location:../halaman_mahasiswa.php')

        ?>