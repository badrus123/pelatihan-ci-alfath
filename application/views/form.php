<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learning Codeigniter</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/css/cs-skin-elastic.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/assets/css/style.css'?>">
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
    <?php $this->load->view('layout');?>

    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php $this->load->view('layout_header');?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">

                <form action="<?php echo site_url().'/BelajarController/input_data';?>" method="post">

                    <div class="col-xs-12 col-sm-">
                        <div class="card">
                            <div class="card-header">
                                <strong>Input</strong> <small>Data diri</small>
                            </div>
                            <div class="card-body card-block">
                                    <div class="form-group">
                                    <label class=" form-control-label">Nim</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bar-chart"></i></div>
                                        <input name="nim" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                        <input name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Kelas</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-window-maximize"></i></div>
                                        <input name="kelas" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jurusan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-institution"></i></div>
                                        <input name="jurusan" class="form-control">
                                    </div>
                                </div>
								<div>
									<input style="width:100%" type="submit" class="btn btn-success" value="submit">
								</div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
      </div>



  </div>


</div><!-- .animated -->
        </div><!-- .content -->
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">IF-Lab</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo base_url().'assets/assets/js/main.js'?>"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url().'assets/assets/js/init/weather-init.js'?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
	<script src="<?php echo base_url().'assets/assets/js/main.js'?>"></script>
	<script src="<?php echo base_url().'assets/assets/js/lib/chosen/chosen.jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/assets/js/init/fullcalendar-init.js'?>"></script>
</body>
</html>
