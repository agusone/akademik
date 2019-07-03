<?php 
include 'koneksi.php';
include 'header_footer/header_admin.php';

$jadwal = mysqli_query($koneksi,"SELECT * FROM data_jadwal");
?>


     <!-- MAIN CONTENT-->
     <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                      <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Jadwal Kuliah</h2>
                                    <button onclick="window.location.href='tambah_jadwal.php'" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Tambah Jadwal</button>
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
                                                <th>Mata Kuliah</th>
                                                <th>Waktu</th>
                                                <th >Kelas</th>
                                                <th >Ruangan</th>
                                                <th>Aksi</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = "1";
                                        foreach ($jadwal as $j):
                                        ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td> <?php echo $j['matkul'] ?></td>
                                                <td><?php echo $j['jam'] ?></td>
                                                <td><?php echo $j['kelas'] ?></td>
                                                <td> <?php echo $j['ruangan'] ?></td>
                                                <td>
                                                <a href="edit_detail_jadwal.php?id=<?php echo $mhs['id']; ?>"><i class="fas fa-edit"></i></a> | 
                                                <a href="delete.php?id=<?php echo $mhs['id']; ?>"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                                 
                                            </tr>
                                           
                                            <?php 
                                         $no++;
                                        endforeach; ?>
                                            
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