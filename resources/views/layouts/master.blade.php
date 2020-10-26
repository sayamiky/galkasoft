<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Galkasoft</title>
    {{-- <link rel="stylesheet" href="{{asset('dist/modules/bootstrap/css/bootstrap.min.css')}}"> --}}
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- TABLE STYLES-->
    <link href="{{asset('assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('assets/js/Lightweight-Chart/cssCharts.css')}}"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                
                <div id="sideNav" href="">
                <i class="fa fa-bars icon"></i> 
                </div>
                <a class="navbar-brand" href="index.html"><img src="assets/img/1.png" alt=""></a>
                
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <div class="adudu">
                        <strong style="color: white;">PT. Varash Saddan Nusantara</strong>
                    </div>
                    <div class="adudu-min">
                        Ni Wayan Eka Putri Suantari
                    </div>
                    
                </li>
                 <!-- /.dropdown -->
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-circle fa-3x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-2x"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a><h3>Pemberitahuan</h3></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-info-circle fa-2x"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell fa-lg" style="color: #008f73;"></i>
                    </a>
                </li>
               
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="/"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('laporan') }}"><i class="fa fa-file"></i> Laporan</a>
                    </li> 
                    <li>
                        <a href="#"><i class="fa fa-money"></i> Keuangan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('kas') }}"><i class="fa fa-qrcode"></i> Kas dan Bank</a>
                            </li>
                            <li>
                                <a href="{{ route('penjualan') }}"><i class="fa fa-tags"></i> Penjualan</a>
                            </li>
                            <li>
                                <a href="{{ route('pembelian') }}"><i class="fa fa-shopping-cart"></i> Pembelian </a>
                            </li>
                            <li>
                                <a href="{{ route('biaya') }}"><i class="fa fa-file-text-o"></i> Biaya </a>
                            </li>
						</ul>
					</li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('kontak') }}"><i class="fa fa-book"></i> Kontak</a>
                            </li>
                            <li>
                                <a href="{{ route('produk') }}"><i class="fa fa-columns"></i> Produk</a>
                            </li>
                            <li>
                                <a href="{{ route('pengaturanaset') }}"><i class="fa fa-pencil-square-o"></i> Pengaturn Aset </a>
                            </li>
                            <li>
                                <a href="{{ route('daftarakun') }}"><i class="fa fa-user"></i> Daftar Akun </a>
                            </li>
						</ul>
					</li>
                    <li>
                        <a href="{{ route('daftarlain') }}"><i class="fa fa-qrcode"></i> Daftar Lainnya</a>
                    </li>
                    <li>
                        <a href="{{ route('pengaturan') }}"><i class="fa fa-tags"></i> Pengaturan</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-shopping-cart"></i> Keluar </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 
<!-- Metis Menu Js -->
<script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
<!-- Morris Chart Js -->
<script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/morris/morris.js')}}"></script>


<script src="{{asset('assets/js/easypiechart.js')}}"></script>
<script src="{{asset('assets/js/easypiechart-data.js')}}"></script>

 <script src="{{asset('assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>

 <!-- DATA TABLE SCRIPTS -->
<script src="{{asset('assets/js/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
</script>
<!-- Custom Js -->
<script src="{{asset('assets/js/custom-scripts.js')}}"></script>

  
<!-- Chart Js -->
<script type="text/javascript" src="{{asset('assets/js/Chart.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('assets/js/chartjs.js')}}"></script> 

</body>

</html>