@extends('layouts.master')
@section('content')
		  <div class="header"> 
            <h1 class="page-header">
                <strong>RINGKASAN BISNIS</strong>
            </h1>			
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
                <div class="row">
                    {{-- <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>44,023</h3>
								<small>Daily Visits</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-eye fa-5x red"></i>
						</div>
		 
                        </div>
						</div>
                    </div> --}}
					
					       {{-- <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>32,850</h3>
								<small>Sales</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-shopping-cart fa-5x blue"></i>
						</div>
		 
                        </div>
						</div>
                    </div> --}}
					
					       {{-- <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>56,150</h3>
								<small>Comments</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-comments fa-5x green"></i>
						</div>
		 
                        </div>
						</div>
                    </div> --}}
					
					       {{-- <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>89,645</h3>
								<small>Daily Profits</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-user fa-5x yellow"></i>
						</div>
		 
                        </div>
						</div>
                    </div> --}}
				   
                </div>
				     <div class="row">
                        <div class="col-sm-3 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Penjualan Terhutang</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="bar-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Tunai</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="line-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Tagihan Belum Bayar</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="bar-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Piutang Dagang</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="line-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
				
		{{-- <div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Profit</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sales</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Customers</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>No. of Visits</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row--> --}}
			
		
				<div class="row">
				    <div class="col-md-6">
						<div class="panel panel-default">
						<div class="panel-heading">
							Arus Kas
						</div>
						<div class="panel-body">
							<div id="morris-line-chart"></div>
						</div>						
					    </div>   
					</div>		
					
					<div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                                    Laba Rugi
                                </div>
                                <div class="panel-body">
                                    <div id="morris-bar-chart"></div>
                                </div>
                        </div>  
					</div>
					
				</div> 
			 
				
				
                
				<div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Daftar Akun Terpantau
                            </div> 
                            <div class="panel-body">
                                 <!--Advanced Tables -->
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="">
                                        <thead style="background-color: #008f73; color:#fff;">
                                            <tr>
                                                <th>Akun</th>
                                                <th>Bulan Ini</th>
                                                <th>Tahun Ini</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>(1-10001) Uang Tunai</td>
                                                <td>Rp. 769.000,00</td>
                                                <td>Rp. 769.000,00</td>
                                            </tr>
                                            <tr>
                                                <td>(1-10002) Rekening Bank</td>
                                                <td>Rp. 266.265.000,00</td>
                                                <td>Rp. 266.265.000,00</td>
                                            </tr>
                                            <tr>
                                                <td>(1-10003) Giro</td>
                                                <td>Rp. 0,00</td>
                                                <td>Rp. 0,00</td>
                                            </tr>
                                            <tr>
                                                <td>(1-10004) Piutang Akun</td>
                                                <td>Rp. 8.855.000,00</td>
                                                <td>Rp. 8.855.000,00</td>
                                            </tr>
                                            <tr>
                                                <td>(1-10005) Piutang Usaha yang Tidak Tertagih</td>
                                                <td>Rp. 0,00</td>
                                                <td>Rp. 0,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <!--End Advanced Tables -->
                            </div>
                        </div>
                    </div>	
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Biaya Operasional
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>
				</div> 	
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">                            
							<div class="panel-heading">
							Area Chart
						</div>
						<div class="panel-body">
							<div id="morris-area-chart"></div>
						</div>
                        </div>
                    </div>
                    

                </div>
				
				
				
                <div class="row">
                    {{-- <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tasks Panel
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge">7 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">16 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">36 minutes ago</span>
                                        <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1.23 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    
                </div>
                <!-- /. ROW  -->
                <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
            </div>
            <!-- /. PAGE INNER  -->
 @endsection 