<?php 
  /* untuk load ajax , ga perlu pake template , karna templatenya sudah ada */
  if ( $this->input->post("load_template") == "false" || (isset($_GET['load_template']) && $_GET['load_template'] == "false") )
  {
    if ( isset($content) ){ echo $content ; } else {echo " Welcome ";}  
    die() ;
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MB <?php if($title){echo "| ".$title;} ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo base_url('assets/logo.ico'); ?>" type="image/x-icon" />
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/dataTables.bootstrap.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/skins/skin-blue.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap3-wysihtml5.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/select2.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/admin/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/admin/js/app.min.js'); ?>"></script>
    <!-- Customs Erporate -->
    <script src="<?php echo base_url('assets/admin/js/custom.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- EDITORS -->
    <!-- <script src="<?php //echo base_url('assets/admin/plugins/editor/ckeditor.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/admin/plugins/editor/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/select2.min.js'); ?>"></script>
  </head>

  <body class="hold-transition skin-blue sidebar-mini "> <!-- sidebar-collapse -->
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url('admin'); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">MB</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MATCHMAKING</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="<?php echo base_url('assets/file/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo base_url('assets/file/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">
                    <?php 
                      if(!empty($this->session->userdata('user_name')) && $this->session->userdata('user_name')!="")
                      {
                        echo $name = $this->session->userdata('user_name');
                      }
                      else {
                        echo $name = "Admin";
                      }
                     ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets/file/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $name; ?>
                      <small>MATCHMAKING</small>
                    </p>
                  </li>
                  

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('assets/file/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>
                <?php 
                      if(!empty($this->session->userdata('user_name')) && $this->session->userdata('user_name')!="")
                      {
                        echo $name = $this->session->userdata('user_name');
                      }
                      else {
                        echo $name = "Admin";
                      }
                     ?>
              </p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" id="menu_admin">
            <li class="header">HEADER</li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/dashboard'); ?>" alt="Admin | Dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/member'); ?>" alt="Admin | Member"><i class="fa fa-user-plus"></i> <span>Member</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/transaction'); ?>" alt="Admin | Transaction"><i class="fa fa-credit-card"></i> <span>Transaction</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/report'); ?>" alt="Admin | Report"><i class="fa fa-bar-chart"></i> <span>Report</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/user'); ?>" alt="Admin | Admin"><i class="fa fa-user"></i> <span>Product Reedem</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/user'); ?>" alt="Admin | Admin"><i class="fa fa-user"></i> <span>Redeem</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/rate'); ?>" alt="Admin | Exchange Rate"><i class="fa fa-cogs"></i> <span>Exchange Rate</span></a></li>
            <li><a class="ajaxload" href="<?php echo base_url('admin/user'); ?>" alt="Admin | Admin"><i class="fa fa-user"></i> <span>Admin</span></a></li>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id="content_body">
        <?php if(isset($content)){echo $content;} ?>
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Matchmaking Bidding Apps
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#">Erporate</a>.</strong> All rights reserved.
      </footer>

      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    
  </body>
</html>
