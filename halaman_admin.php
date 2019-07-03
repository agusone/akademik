
<?php 
include 'header_footer/header_admin.php';
include 'koneksi.php';

$mahasiswa = mysqli_query($koneksi,"SELECT * FROM data_mahasiswa");
$jadwals  = mysqli_query($koneksi,"SELECT * FROM data_jadwal");
 
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>Jumlah Mahasiswa</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="col-md-7">
                            <a href="detail_mahasiswa.php">
                            <h2 class="title-1 m-b-25">Data Mahasiswa</h2>
                            </a>
                                
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th >prodi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $nom ="1";
                                        foreach($mahasiswa as $m) if ($nom < 4){
                                        ?>
                                            <tr>
                                                <td><?php echo $nom ?></td>
                                                <td><?php echo $m['nim'] ?></td>
                                                <td><?php echo $m['nama'] ?></td>
                                               
                                                <td ><?php echo $m['prodi'] ?></td>
                                                
                                            </tr>
                                            <?php 
                                            $nom++;
                                         };
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    <div class="card-footer text-center">
                                    <a href="detail_mahasiswa.php"> more </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                            <a href="detail_jadwal.php">
                            <h2 class="title-1 m-b-25">Top Matkul</h2>
                            </a>
                               
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                        <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>Mata Kuliah</td>
                                                        <td>Jam</td>
                                                        <td>Kelas</td>
                                                    </tr>
                                                    <?php 
                                                    $num ="1";
                                                    foreach($jadwals as $j) if ($num < 4){
                                                    ?>
                                                        <tr>
                                                        <td><?php echo $num ?></td>
                                                        <td><?php echo $j['matkul'] ?></td>
                                                        <td><?php echo $j['jam'] ?></td>
                                                        <td><?php echo $j['kelas'] ?></td>
                                                    </tr>

                                                    <?php 
                                                        $num++;
                                                    };
                                                        ?>
                                                    
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                       
                                    
                                    </div>
                                
                                
                                </div>
                                <div class="card-footer text-center">
                                                <a href="detail_jadwal.php"> more </a>
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