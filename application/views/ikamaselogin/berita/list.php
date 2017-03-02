<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Artikel Berita</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Setting </a>
                        </li>
                        <li class="active">
                            <strong>Artikel Berita</strong>
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
                        <h5>Manegemen Data Berita  <small></small></h5>
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
                                  
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables" >
                                    <thead>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Posting</th>
                                        <th>Kategori Berita</th>
                                        <th>Deskripsi Berita</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                            <?php 
                                            $no = 0;
                                            foreach ($data as $value) 
                                            {
                                                $gambar = $value['gambar'];
                                                $route  = base_url("resource/images/".$gambar."");
                                            ?>
                                                <tr>
                                                   <td><?php echo ++$no; ?></td>
                                                    <td><?php echo $value['judul_berita']; ?></td>
                                                    <td><?php echo $value['tgl_posting']; ?></td>
                                                    <td><?php echo $value['kategori']; ?></td>
                                                    <td><?php echo $value['deskripsi']; ?></td>
                                                    <td><img src="<?php echo $route; ?>" class="img-thumbnail" width="100"></td>
                                                    <td>
                                                        <a href="<?php echo base_url('login/berita/komentar'); ?>" class="btn btn-xs btn-flat btn-info"><span class="fa fa-edit"></span> Lihat Komentar</a>
                                                        <a href="" class="btn btn-xs btn-flat btn-info"><span class="fa fa-edit"></span> Edit</a>
                                                        <a href="" class="btn btn-xs btn-flat btn-danger"><span class="fa fa-trash"></span> Hapus</a>    
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    </table>
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