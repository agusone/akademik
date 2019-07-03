<?php 
include 'header_footer/header_admin.php';
include 'koneksi.php';

$mahasiswa = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa")
?>


     <!-- MAIN CONTENT-->
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                   <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Daftar Mahasiswa</h2>
                                    <button onclick="window.location.href='tambah_mahasiswa.php'" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Tambah Mahasiswa</button>
                                </div>
                            </div>
                        </div>
                    
                         
                        <div class="row">
                            <div class="col-lg-12">
                               
                            
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Foto</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Phone</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Jneis Kelamin</th>
                                                <th>Agama</th>
                                                <th>tmp tgl lahir</th>
                                                <th>angkatan</th>
                                                <th>prodi</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no="1";
                                                foreach($mahasiswa as $mhs):
                                        ?>
                                            <tr>
                                                <th><?php echo $no ?></th>
                                                <th>  <img src="images/<?php echo $mhs['img'] ?>" width="100px" height="70px" alt=""></th>
                                                <th><?php echo $mhs['nim'] ?></th>
                                                <th><?php echo $mhs['nama'] ?></th>
                                                <th><?php echo $mhs['phone'] ?></th>
                                                <th><?php echo $mhs['kelas'] ?></th>
                                                <th><?php echo $mhs['alamat'] ?></th>
                                                <th><?php echo $mhs['email'] ?></th>
                                                <th><?php echo $mhs['jenis_kelamin'] ?></th>
                                                <th><?php echo $mhs['agama'] ?></th>
                                                <th><?php echo $mhs['tmp_lahir'] .', '. $mhs['tgl_lahir'] ?></th>
                                                <th><?php echo $mhs['angkatan'] ?></th>
                                                <th><?php echo $mhs['prodi'] ?></th>
                                                <th>
                                                <a href="edit_detail_mhs.php?id=<?php echo $mhs['id']; ?>"><i class="fas fa-edit"></i></a> | 
                                                <a href="delete.php?id=<?php echo $mhs['id']; ?>"><i class="far fa-trash-alt"></i></a>
                                                </th>
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
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


<?php 
include 'header_footer/footer_admin.php';


?>