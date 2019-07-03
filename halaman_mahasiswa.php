 

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Mahasiswa</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
  <?php 
  session_start();
  
  include 'koneksi.php';

 
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
  }
 
  $nim = $_SESSION['nim'];

 

  
// $d_mahasiswa = mysqli_query($koneksi,"SELECT data_mahasiswa.nama,data_mahasiswa.nim ,data_mahasiswa.phone,data_mahasiswa.alamat, user.level FROM data_mahasiswa INNER JOIN user ON data_mahasiswa.nim=user.username WHERE user.username='$nim'");
$d_mahasiswa = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE nim = '$nim'");
$data= mysqli_fetch_array($d_mahasiswa);

$kelas= $data['kelas'];

$d_jadwal = mysqli_query($koneksi,"SELECT * FROM data_jadwal WHERE kelas = '$kelas'");




 
	?>
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                
                <li class="nav-item">	<a  class="nav-link smooth-scroll" href="logout.php">LOGOUT</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/<?php echo $data['img'] ?>" alt="Image"/></a></div>
        
          <div class="h2 title"><?php echo $data['nama']; ?></div>
          <p class="category text-white"><?php echo $_SESSION['level']; ?></p>
		  <a class="btn btn-primary smooth-scroll mr-2" href="edit_profil.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Edit Profil</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
  <div class="row">
  <div class="col align-self-end">
  		
    </div>
  </div>
 
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
	  
        <div class="col-lg-6 col-md-12">
		
		<div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
			<hr>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">NIM:</strong></div>
              <div class="col-sm-8"><?php echo $data['nim']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Nama :</strong></div>
              <div class="col-sm-8"><?php echo $data['nama']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone :</strong></div>
              <div class="col-sm-8"><?php echo $data['phone']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Alamat :</strong></div>
              <div class="col-sm-8"><?php echo $data['alamat']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email :</strong></div>
              <div class="col-sm-8"><?php echo $data['email']; ?></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title"></div><br>
			<hr>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Jenis Kelamin :</strong></div>
              <div class="col-sm-8"><?php echo $data['jenis_kelamin']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Agama :</strong></div>
              <div class="col-sm-8"><?php echo $data['agama']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">tmp, Tgl.Lahir :</strong></div>
              <div class="col-sm-8"><?php echo $data['tmp_lahir'] .', '. $data['tgl_lahir'] ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Angkatan :</strong></div>
              <div class="col-sm-8"><?php echo $data['angkatan']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Program Studi:</strong></div>
              <div class="col-sm-8"><?php echo $data['prodi']; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">DAFTAR PERKULIAHAN YANG ANDA IKUTI</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
	  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mata Kuliah</th>
	  <th scope="col">Waktu</th>
    <th scope="col">Ruangan</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $no = "1";
  foreach($d_jadwal as $j):

  ?>
    <tr>
      <th scope="row"><?php echo $no ?></th>
      <td><?php echo $j['matkul'] ?></td>
      <td><?php echo $j['jam'] ?></td>
      <td><?php echo $j['ruangan'] ?></td>
	  <td><?php echo $j['kelas'] ?></td>
    </tr>

    <?php 
    $no++;
  endforeach;
    ?>
    
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
 
 
 
 
 </div>
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">Akademik</div>
      <div class="text-center text-muted">
        <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>