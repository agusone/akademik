 

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
  
  $d_mahasiswa = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE nim = '$nim'");
  $data= mysqli_fetch_array($d_mahasiswa);
 
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
          
        </div>
      </div>
      <div class="section">
        <div class="container">
       
        </div>
      </div>
    </div>
  </div>
</div>
 
<div class="section" id="skill">
  <div class="container">
  <a class="btn btn-primary smooth-scroll mb-4" href="halaman_mahasiswa.php" > Back</a>
		 
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
                    
      <h1>Edit Profil</h1>

                            <form action="proses/edit_profil_proses.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             
                                             
                                              <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="namalengkap-input" class=" form-control-label">Nama Lengkap</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <input type="text" value="<?php echo $data['nama'] ?>" id="namalengkap-input" name="namalengkap-input" placeholder="Nama Lengkap" class="form-control">
                                                    
                                                 </div>
                                             </div>
 
                                              <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="phone-input" class=" form-control-label">Phone</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <input type="number" id="phone-input" value="<?php echo $data['phone'] ?>" name="phone-input" placeholder="Nomor Telepon" class="form-control">
                                                     <input type="hidden" name="input-nim" value="<?php echo $data['nim']; ?>">
                                                    
                                                 </div>
                                             </div>
 
                                              <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="alamat-input" class=" form-control-label">Alamat</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <input type="text" id="alamat-input" value="<?php echo $data['alamat'] ?>" name="alamat-input" placeholder="Alamat" class="form-control">
                                                    
                                                 </div>
                                             </div>
 
                                             <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="email-input" class=" form-control-label">Email</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <input type="text" id="email-input" name="email-input" value="<?php echo $data['email'] ?>" placeholder="Email" class="form-control">
                                                    
                                                 </div>
                                             </div>
                                             
                                             <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="select-jeniskelamin" class=" form-control-label">Jenis Kelamin</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <select name="select-jeniskelamin" id="select-jeniskelamin" class="form-control">
                                                         <option value="<?php echo $data['jenis_kelamin'] ?>"><?php echo $data['jenis_kelamin'] ?></option>
                                                         <option value="Laki - Laki">Laki- Laki</option>
                                                         <option value="Perempuan">Perempuan</option>
                                                         <option value="Lainnya">Lainnya </option>
                                                         
                                                     </select>
                                                 </div>
                                             </div>
 
                                             <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="select-agama" class=" form-control-label">Agama</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <select name="select-agama" id="select-agama" class="form-control">
                                                         <option value="<?php echo $data['agama'] ?>"><?php echo $data['agama'] ?></option>
                                                     
                                                         <option value="Islam">Islam</option>
                                                         <option value="Hindu">Hindu</option>
                                                         <option value="Budha">Budha</option>
                                                         <option value="Kristen Katolik">Kristen Katolik</option>
                                                         <option value="Protestan">Protestan</option>
                                                         <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                         
                                                     </select>
                                                 </div>
                                             </div>
 
 
                                              <div class="row form-group">
                                              <div class="col col-md-3">
                                                     <label for="select" class=" form-control-label">Tempat Tanggal Lahir</label>
                                                 </div>
                                                 <div class="col-4">
                                                     <div class="form-group">
                                                         <label for="tempat-input" class="control-label mb-1">Tempat Lahir</label>
                                                         <input id="tempat-input" value="<?php echo $data['tmp_lahir'] ?>" name="tempat-input" type="text" class="form-control tempat-input"  
                                                             placeholder="Tempat Lahir"
                                                             >
                                                         
                                                     </div>
                                                 </div>
                                                 <div class="col-4">
                                                     <label for="tanggal-input" class="control-label mb-1">Tanggal Lahir</label>
                                                     <div class="input-group">
                                                         <input id="tanggal-input" value="<?php echo $data['tgl_lahir'] ?>"name="tanggal-input" type="date" class="form-control cc-cvc" 
                                                             >
 
                                                     </div>
                                                 </div>
                                             </div>
 
 
                                             <div class="row form-group">
                                                 <div class="col col-md-3">
                                                     <label for="file-input" class=" form-control-label">Image</label>
                                                 </div>
                                                 <div class="col-12 col-md-9">
                                                     <input type="file" id="file-input" name="profil" placeholder="Alamat" class="form-control">
                                                    
                                                 </div>
                                             </div>
                                             
                                            
                                         <div class="card-footer">
                                             <button type="submit" name="tambah" class="btn btn-primary btn-sm">
                                                 <i class="fa fa-dot-circle-o"></i> Simpan
                                             </button>
                                             <button type="reset"  onclick="window.location.href='halaman_mahasiswa.php'" class="btn btn-danger btn-sm">
                                                 <i class="fa fa-ban"></i> Batal
                                             </button>
                                         </div>
                                             
                                         </form>

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