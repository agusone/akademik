<?php 

    include 'koneksi.php';
   
    include 'header_footer/header_admin.php';

    $edit=mysqli_query($koneksi,"SELECT * FROM data_mahasiswa WHERE id ='$_GET[id]'");
    $e=mysqli_fetch_array($edit);
  
?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="col-lg-12">

              
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update Detail Mahasiswa</strong> Form
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="proses/edit_detail_mhs_proses.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                             
                                            
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nim-input" class=" form-control-label">Nim</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="hidden" name="id" value="<?php echo $e['id'];?>">
                                                    <input type="number" value="<?php echo $e['nim'];?>"  id="nim-input" name="nim-input" placeholder="NIM" class="form-control">
                                                   
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="namalengkap-input" class=" form-control-label">Nama Lengkap</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="namalengkap-input" value="<?php echo $e['nama'];?>"name="namalengkap-input" placeholder="Nama Lengkap" class="form-control">
                                                   
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="phone-input" class=" form-control-label">Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="phone-input" value="<?php echo $e['phone'];?>" name="phone-input" placeholder="Nomor Telepon" class="form-control">
                                                   
                                                </div>
                                            </div>

                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="alamat-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="alamat-input" value="<?php echo $e['alamat'];?>"name="alamat-input" placeholder="Alamat" class="form-control">
                                                   
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" name="email-input" value="<?php echo $e['email'];?>" placeholder="Email" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select-jeniskelamin" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select-jeniskelamin" id="select-jeniskelamin" class="form-control">
                                                        <option value="<?php echo $e['jenis_kelamin'];?>"><?php echo $e['jenis_kelamin'];?></option>
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
                                                        <option value="<?php echo $e['agama'];?>"><?php echo $e['agama'];?> </option>
                                                    
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
                                                        <input id="tempat-input " value="<?php echo $e['tmp_lahir'];?>" name="tempat-input" type="text" class="form-control tempat-input"  
                                                            placeholder="Tempat Lahir"
                                                            >
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="tanggal-input" class="control-label mb-1">Tanggal Lahir</label>
                                                    <div class="input-group">
                                                        <input id="tanggal-input" value="<?php echo $e['tgl_lahir'];?>" name="tanggal-input" type="date" class="form-control cc-cvc" 
                                                            >

                                                    </div>
                                                </div>
                                            </div>


                                             
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select-kelas" id="select" class="form-control">
                                                        <option value="<?php echo $e['kelas'];?>"> <?php echo $e['kelas'];?></option>
                                                        <option value="ai173">AI173</option>
                                                        <option value="ac179">AC179</option>
                                                        <option value="ad170">AD170</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                              
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="angkatan-input" class=" form-control-label">Angkatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="angkatan-input" value="<?php echo $e['angkatan'];?>" name="angkatan-input" placeholder="Angkatan" class="form-control">
                                                   
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="prodi-input" class=" form-control-label">Prodi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="prodi-input" value="<?php echo $e['prodi'];?>" name="prodi-input" placeholder="Prodi" class="form-control">
                                                   
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
                                                <i class="fa fa-dot-circle-o"></i> Update
                                            </button>
                                            <button type="reset"  onclick="window.location.href='detail_mahasiswa.php'" class="btn btn-danger btn-sm">
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
            </div>


<?php
  include 'header_footer/footer_admin.php';
?>