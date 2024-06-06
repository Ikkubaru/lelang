<!DOCTYPE html>
<html lang="en">

<head>
   <title>Sistem Lelang Online</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="<?= base_url('assets/') ?>assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="" class="logo"><?= $this->session->userdata('username') ?></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
               <ul class="top-nav">
                  <!--Notification Menu-->
                    
                  <li class="dropdown notification-menu">
                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                     </a>
                     <ul class="dropdown-menu">
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                                 </span>
                           </a>
                        </li>
                     
                     </ul>
                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><i class=" icofont icofont-simple-down"></i></span>
                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="<?= base_url('admin/auth2/logout') ?>"><i class="icon-logout"></i> Logout</a></li>
                     </ul>
                  </li>
               </ul>

            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
               <?php $halaman=$this->uri->segment(2);?>
                <li class="nav-level">--- Navigation</li>
                <li class="<?php if($halaman == 'dashboard'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('dashboard');?>">
                        <i class="icon-home"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">--- Components</li>
                <li class="<?php if($halaman == 'pengajuan'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/pengajuan');?>">
                        <i class="icon-basket"></i><span> Pengajuan Lelang</span>
                    </a>                
                </li>
                <li class="<?php if($halaman == 'lelang_on'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/lelang_on');?>">
                        <i class="icon-basket"></i><span> Lelang Berlangsung</span>
                    </a>                
                </li>
                <li class="<?php if($halaman == 'lelang_finish'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/lelang_finish');?>">
                        <i class="icon-basket"></i><span> Lelang Selesai</span>
                    </a>                
                </li>
                <li class="<?php if($halaman == 'kategori'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/kategori');?>">
                        <i class="icon-basket"></i><span> Kategori Lelang</span>
                    </a>                
                </li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" >
                        <i class=""></i><span> </span>
                    </a>                
                </li>
                <?php if($this->session->userdata('level') == 'admin'){ ?>
                <li class="<?php if($halaman == 'admin'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/admin');?>">
                        <i class="icon-people"></i><span> Administrator</span>
                    </a>                
                </li>
                <li class="<?php if($halaman == 'petugas'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/petugas');?>">
                        <i class="icon-people"></i><span> Petugas</span>
                    </a>                
                </li>
                <li class="<?php if($halaman == 'user'){echo "active";} ?> treeview">
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/user');?>">
                        <i class="icon-people"></i><span> User Basic</span>
                    </a>                
                </li>
                <?php }?>
            </ul>
         </section>
      </aside>

      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4></h4>
               </div>
            </div>
            <!-- 2-1 block start -->
            <div class="row">
               <div class="col-xl-12 col-lg-12">
                  <div class="card">
                     <div class="card-block">
                        <div class="table-responsive">
                           <h1>Welcome <?= $this->session->userdata('username') ?></h1>
                           <?= $contents ?>  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- 2-1 block end -->
         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->
      </div>
   </div>


   <!-- Required Jqurey -->
   <script src="<?= base_url('assets/') ?>assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="<?= base_url('assets/') ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="<?= base_url('assets/') ?>assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="<?= base_url('assets/') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="<?= base_url('assets/') ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="<?= base_url('assets/') ?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="<?= base_url('assets/') ?>assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="<?= base_url('assets/') ?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="<?= base_url('assets/') ?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="<?= base_url('assets/') ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="<?= base_url('assets/') ?>assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="<?= base_url('assets/') ?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="<?= base_url('assets/') ?>assets/js/main.min.js"></script>
   <script type="text/javascript" src="<?= base_url('assets/') ?>assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="<?= base_url('assets/') ?>assets/pages/elements.js"></script>
   <script src="<?= base_url('assets/') ?>assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
