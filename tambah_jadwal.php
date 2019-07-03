<?php
  include 'header_footer/header_admin.php';
?>

   <!-- MAIN CONTENT-->
   <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Tambah Jadwal</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="proses/tambah_jadwal_proses.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="matkul-input" class=" form-control-label">Mata Kuliah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="matkul-input" name="matkul-input" placeholder="Nama Mata Kuliah" class="form-control">
                                                     
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="waktu-input" class=" form-control-label">Waktu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="waktu-input" name="waktu-input" placeholder="day, 00:00 - 00:00" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            
                                            
                                             
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="kelas-select" id="select" class="form-control">
                                                        <option value="">Pilih Kelas</option>
                                                        <option value="ai173">AI173</option>
                                                        <option value="ac179">AC179</option>
                                                        <option value="ad170">AD170</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Ruangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="ruangan-select" id="select-ruangan" class="form-control">
                                                        <option value="">Pilih Ruangan</option>
                                                        <option value="Lab Mobile">Lab Mobile</option>
                                                        <option value="V.1">V.1</option>
                                                        <option value="IV.2">IV.2</option>
                                                        <option value="II.3">II.3</option>
                                                        <option value="III.4">III.4</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                           
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                            
                                        </form>
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