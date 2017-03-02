<?php if ($error != null): ?>
  <script type="text/javascript">
    winload(function() {
      swal("<?php echo $error; ?>","", "warning");
    });
  </script>
<?php endif; ?>
<div class="loginColumns animated fadeInDown" style="background-color:white;margin-top: 80px; ">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">
                    <center>Ikatan Mahasiswa Se- Sulawesi</center>
                </h2>
                <p align="left">
                   SITUS RESMI FORUM IKAMASE
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    <a href="" class="btn btn-primary btn-info btn-sm"><span class="fa fa-desktop"></span> View Website </a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content" style="background-color:rgba(77, 243, 197, 0.93); ">
                    <center><img src="<?php echo base_url('resource/themes/logo/logo.png'); ?>" class="img-circle" style="width:100px;  "></center>
                    <form class="m-t" role="form" action="<?php echo $action; ?>" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Username" required="" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Ikamase / Ikatan Mahasiswa Sesulawesi - <?php echo date('Y'); ?>
            </div>
            <div class="col-md-6 text-right">
               <small>© 2016 - <?php echo date('Y'); ?></small>
            </div>
        </div>
    <script>winload(function() { loader('auth'); }); </script>