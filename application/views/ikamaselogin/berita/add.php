<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Artikel Berita</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Berita </a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Berita</strong>
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
                        <h5>Manegemen Tambah Data Berita  <small></small></h5>
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
                                <a class="btn btn-info btn-xs" type="button" href="<?php echo base_url('login/berita'); ?>" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                                <a  class="btn btn-success btn-xs" type="button" href="<?php echo base_url('login/berita/add'); ?>"  ><span class="fa fa-plus"></span> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ibox float-e-margins">
                                        <form class="role" method="POST">
                                        <div class="form-group">
                                            <label>Judul Berita</label>
                                            <input type="text" class="form-control" placeholder="Isi Dengan Judul berita" name="judul_berita" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori Berita</label>
                                            <select class="form-control select2" name="idkategori">
                                                <option value="null">Pilih Kategori Berita</option>
                                                <?php 
                                                    foreach ($kategori as  $value) {
                                                        echo "<option value=".$value['idkategori'].">".$value['kategori']."</option>";
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Desikripsi Berita</label>
                                             <div class="panel panel-primary">
                                                 <div class="panel-body">
                                                     <div class="summernote">
                                                    </div>
                                                 </div>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload File</label>
                                            <input type="file" class="form-control" name="gambar" required>
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