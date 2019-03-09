<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url('') ?>assets/images/logo/logold.png">
    <link rel="shortcut icon" href="<?php echo base_url('') ?>assets/images/logo/logold.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>asset/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>asset/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($this->uri->segment(1)=="Admin_reguler"){echo "class='active'";} ?>>
                        <a href="<?php echo site_url('Admin_reguler') ?>"><i class="menu-icon fa fa-money"></i>Kreasi Reguler </a>
                    </li>
                    <li <?php if($this->uri->segment(1)=="Admin_multi"){echo "class='active'";} ?>>
                        <a href="<?php echo site_url('Admin_multi') ?>"><i class="menu-icon fa fa-id-badge"></i>Kreasi Multiguna </a>
                    </li>
                    <li <?php if($this->uri->segment(1)=="Admin_berjangka" || $this->uri->segment(1)=="Admin_sekali"){echo "class='menu-item-has-children dropdown active'";} else {echo "class='menu-item-has-children dropdown'";}?>>
                        <a href="<?php echo base_url('') ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clock-o"></i>Kreasi Fleksi</a>
                        <ul class="sub-menu children dropdown-menu">                            
                        <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo site_url('Admin_berjangka') ?>">Fleksi Berjangka</a></li>
                        <li ><i class="fa fa-bolt"></i><a href="<?php echo site_url('Admin_sekali') ?>">Fleksi Sekali Bayar</a></li>
                       </ul>
                    </li>
                    <li <?php if($this->uri->segment(1)=="Admin_biaya"){echo "class='active'";} ?>>
                        <a href="<?php echo site_url('Admin_biaya') ?>"><i class="menu-icon fa fa-file-text"></i>Biaya Administrasi </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <?php 
        $sessionData = $this->session->userdata('usersession');
		$id_user = $sessionData['id_user'];
		$data['username'] = $sessionData['username'];
        $data['nama_user'] = $sessionData['nama_user'];
    ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('') ?>./"><img src="<?php echo base_url('') ?>assets/images/logold.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="<?php echo base_url('') ?>./"><img src="<?php echo base_url('') ?>assets/images/logold.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="<?php echo base_url('') ?>#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $data['nama_user']; ?>
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?php echo base_url('') ?>#"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="<?php echo site_url('admin/logout') ?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->