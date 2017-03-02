<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Master Pengguna</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Setting </a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Pengguna</strong>
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
                        <h5>Manegemen Tambah Data Pengguna  <small></small></h5>
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
                                <a class="btn btn-info btn-xs" type="button" href="<?php echo base_url('login/user'); ?>" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                                <a  class="btn btn-success btn-xs" type="button" href="<?php echo base_url('login/user/add'); ?>"  ><span class="fa fa-plus"></span> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ibox float-e-margins">
                                    <div class="col-md-6">
                                        <?php echo $this->session->flashdata('exist'); ?>
                                        <?php echo validation_errors( "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>", "</div>"); ?>
                                        <?php echo form_open( 'login/user/ubahuser',[ 'class'=> 'role', 'id' => 'validform']) ?>
                                        <?php foreach ($data as  $value): ?>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label >
                                            <input type="text" class="form-control" placeholder="Isi Dengan Nama Lengkap" name="name" required value="<?php echo $value['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" placeholder="Isi Dengan Alamat" name="address" required style="height:200px; "></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kontak</label>
                                            <input type="text" class="form-control" placeholder="Isi dengan Kontak / No Hp" name="contact" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Isi Dengan Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Isi Dengan Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-sm"><span class="fa fa-save"></span> Simpan</button>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php form_close() ?>
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