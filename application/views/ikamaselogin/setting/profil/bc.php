<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Master Profil</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Setting </a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Profil</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content">
         <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content  animated fadeInRight">
                   <div class="row">
                   <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Manegemen Tambah Data Profil  <small></small></h5>
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
                                <a class="btn btn-info btn-xs" type="button" href="<?php echo base_url('login/profil'); ?>" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                                <a  class="btn btn-success btn-xs" type="button" href="<?php echo base_url('login/profil/add'); ?>"  ><span class="fa fa-plus"></span> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ibox float-e-margins">
                                     <form role='form' id='formajax' method="post" name='formajax'>
                                        <div class="form-group">
                                            <label>Judul Profil</label>
                                                <input type="text" class="form-control" placeholder="Isi Dengan Judul Profil" name="judul_profil" id="judul_profil">
                                        </div>
                                        <div class="form-group">
                                            <label>Desikripsi Profil</label>
                                             <div class="panel panel-primary">
                                                 <div class="panel-body">
                                                     <textarea class="summernote" id="deksripsi" name="deksripsi"> </textarea>
                                                 </div>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload File</label>
                                            <input type="file" class="form-control" name="gambar" id="gambar">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-save"></span> Simpan</button>
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


<script type="text/javascript">
          $(document).on('submit', '#formajax', function(e) {
             e.preventDefault();
              $.post('simpan',$('#formajax').serialize(),function (data) {
                console.log(data);
                })
          
        });
</script>     