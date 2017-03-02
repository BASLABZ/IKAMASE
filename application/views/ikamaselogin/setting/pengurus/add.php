<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Master Pengurus</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Setting </a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Pengurus</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
<div class="wrapper wrapper-content">
         <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content  animated fadeInRight">
                   <div class="row">
                   <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Manegemen Tambah Data Pengurus  <small></small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                    <div class="panel-body">
                        <div align="right">
                            <div class="btn-group">
                                <a class="btn btn-info btn-xs" type="button" href="<?php echo base_url('login/pengurus'); ?>" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                                <a  class="btn btn-success btn-xs" type="button" href="<?php echo base_url('login/pengurus/add'); ?>"  ><span class="fa fa-plus"></span> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ibox float-e-margins">
                                    <div class="col-md-6">
                                        <form class="role" method="POST">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Isi Dengan Nama Lengkap" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control select2" name="idjabatan">
                                                <option value="NULL">Pilih Jabatan</option>
                                                <?php 
                                                        foreach ($jabatan as $value) {
                                                            echo "<option value=".$value['idjabatan'].">".$value['jabatan']."</option>";
                                                        }?>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Isi Dengan Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kontak</label>
                                            <input type="text" class="form-control" placeholder="Isi dengan Kontak / No Hp" name="contact" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                           <select class="form-control" name="gender">
                                               <option value="null">-Pilih jenis Kelamin-</option>
                                               <option value="LAKI-LAKI">LAKI-LAKI</option>
                                               <option value="PERPUAN">PEREMPUAN</option>
                                           </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Upload foto</label>
                                            <input type="file" name="foto" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-sm"><span class="fa fa-save"></span> Simpan</button>
                                        </div>
                                    </form>    
                                    </div>    
                                </div>
                            </div>
                    </div>
                </div>
                </div>

                    </div>     
                </div>
            </div>
        </div>
        </div>