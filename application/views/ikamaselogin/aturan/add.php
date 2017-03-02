<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Master Aturan Forum</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Setting </a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Aturan Forum</strong>
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
                        <h5>Manegemen Tambah Data Aturan Forum  <small></small></h5>
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
                                <a class="btn btn-info btn-xs" type="button" href="<?php echo base_url('login/aturan_forum'); ?>" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                                <a  class="btn btn-success btn-xs" type="button" href="<?php echo base_url('login/aturan_forum/add'); ?>"  ><span class="fa fa-plus"></span> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ibox float-e-margins">
                                        <form class="role" method="POST">
                                        <div class="form-group">
                                            <label>Judul Aturan Forum</label>
                                            <input type="text" class="form-control" placeholder="Isi Dengan Judul Aturan Forum" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Desikripsi Aturan Forum</label>
                                             <div class="panel panel-primary">
                                                 <div class="panel-body">
                                                     <div class="summernote">
                                                        <h3>Lorem Ipsum is simply</h3>
                                                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                        <br/>
                                                        <br/>
                                                        <ul>
                                                            <li>Remaining essentially unchanged</li>
                                                            <li>Make a type specimen book</li>
                                                            <li>Unknown printer</li>
                                                        </ul>
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
        