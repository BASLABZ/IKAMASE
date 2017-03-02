<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IKAMASE | FORUM</title>
    <link href="<?php echo base_url('resource/themes/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/css/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/js/plugins/gritter/jquery.gritter.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/css/plugins/dataTables/datatables.min.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/css/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet"/>
    <script src="<?php echo base_url('resource/themes/admin/js/plugins/sweetalert/sweetalert.min.js'); ?>"></script>
    <link href="<?php echo base_url('resource/themes/admin/css/plugins/select2/select2.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resource/themes/admin/css/plugins/summernote/summernote.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('resource/themes/admin/ajax/jquery.form.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('resource/themes/admin/ajax/jquery.ajaxfileupload.js'); ?>"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url('resource/themes/logo/logo.png'); ?>" width="50"/>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Ahmad Bastiar</strong>
                             </span> <span class="text-muted text-xs block">Web Developer <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Pro file</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            <span class="fa fa-home"></span>
                        </div>
                    </li>
                     <li class="active">
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">MENU UTAMA</span>  </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">MASTER</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url('login/user'); ?>">MASTER PENGGUNA</a></li>
                            <li><a href="<?php echo base_url('login/profil'); ?>">MASTER PROFIL</a></li>
                            <li><a href="<?php echo base_url('login/jabatan'); ?>">MASTER JABATAN</a></li>
                            <li><a href="<?php echo base_url('login/pengurus'); ?>">MASTER PENGURUS</a></li>
                            <li><a href="<?php echo base_url('login/programkerja'); ?>">MASTER PROGRAM KERJA</a></li>
                        </ul>
                    </li>
                    <li>
                          <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">BERITA</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url('login/kategori'); ?>">KATEGORI</a></li>
                            <li><a href="<?php echo base_url('login/berita'); ?>">BERITA</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/topik'); ?>"><i class="fa fa-comments"></i> <span class="nav-label">TOPIK</span>  </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/agenda'); ?>"><i class="fa fa-tags"></i> <span class="nav-label">AGENDA</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/anggota'); ?>"><i class="fa fa-users"></i> <span class="nav-label">ANGGOTA</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('login/aturan_forum'); ?>"><i class="fa fa-laptop"></i> <span class="nav-label">ATURAN FORUM</span></a>
                    </li>
                </ul>

            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Ikamase Forum Admin.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url('resource/themes/admin/img/a7.jpg'); ?>">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url('resource/themes/admin/img/a4.jpg'); ?>">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="<?php echo base_url('resource/themes/admin/img/profil'); ?>e.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                     <button class="btn btn-warning btn-flat" type="submit" id='logout'><span class="fa fa-sign-out"></span> Keluar</button>
                </li>
            </ul>

        </nav>
        </div>

 