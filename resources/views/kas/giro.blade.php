@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>(1-10003) GIRO</strong>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    {{-- <i class="fa fa-circle fa-3x"></i> <i class="fa fa-caret-down"></i> --}}
                    <button class="btn btn-default btn-sm ml-auto" style="float: right;" > <i class="fa fa-chevron-down"></i> Pilihan</button>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Impor Laporan Bank</a>
                    </li>
                    <li><a href="#">Tautan Tunai</a>
                    </li>
                    <li><a href="#">Laporan Rekonsiliasi</a>
                    </li>
                    <li><a href="#">Peraturan Rekonsiliasi</a>
                    </li>
                    <li><a href="#">Mutasi Rekening</a>
                    </li>
                    <li><a href="#">Ubah Akun</a>
                    </li>
                </ul>
            </li>
        </ul>
            
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    {{-- <i class="fa fa-circle fa-3x"></i> <i class="fa fa-caret-down"></i> --}}
                    <button class="btn btn-default btn-sm ml-auto" style="float: right;" > <i class="fa fa-chevron-down"></i> Buat Transaksi</button>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Transfer Uang</a>
                    </li>
                    <li><a href="#">Terima Uang</a>
                    </li>
                    <li><a href="#">Kirim Uang</a>
                    </li>
                </ul>
            </li>
        </ul>
    </h1><br>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    Basic Tabs
                </div> -->
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">TRANSAKSI JURNAL</a>
                        </li>
                        <li class=""><a href="#profile" data-toggle="tab">LAPORAN BANK</a>
                        </li>
                        <li class=""><a href="#messages" data-toggle="tab">REKONSILIASI(0)</a>
                        </li>
                        <li class=""><a href="#settings" data-toggle="tab">PEMETAAN KAS</a>
                    </ul>
                        
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <ul class="nav navbar-top-links navbar-left">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        {{-- <i class="fa fa-circle fa-3x"></i> <i class="fa fa-caret-down"></i> --}}
                                        <button class="btn btn-default btn-sm ml-auto" style="float: left;" > <i class="fa fa-chevron-down"></i> Filter</button>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Tandai Semua</a>
                                        </li>
                                        <li><a href="#">Terekonsiliasi</a>
                                        </li>
                                        <li><a href="#">Belum Terekonsiliasi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <br>
                            <div class="row">
                                <div class="col-md-12"><br>
                                            <!--Advanced Tables -->
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead style="background-color: #008f73; color:#fff;">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Kontak</th>
                                                    <th>Deskripsi</th>
                                                    <th>Terima</th>
                                                    <th>Kirim</th>
                                                    <th>Saldo</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>30/06/2020</td>
                                                    <td></td>
                                                    <td>Jurnal Entry #1001</td>
                                                    <td class="center">1.000.000,00</td>
                                                    <td class="center">0,00</td>
                                                    <td class="center">1.000.000,00</td>
                                                    <td class="center">Belum Terekonsiliasi</td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>09/08/2020</td>
                                                    <td></td>
                                                    <td>Expense #EX-004</td>
                                                    <td class="center">0,00</td>
                                                    <td class="center">154.000,00</td>
                                                    <td class="center">846.000,00</td>
                                                    <td class="center">Belum Terekonsiliasi</td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>28/09/2020</td>
                                                    <td></td>
                                                    <td>Expense #EX-005</td>
                                                    <td class="center">0,00</td>
                                                    <td class="center">77.000,00</td>
                                                    <td class="center">769.000,00</td>
                                                    <td class="center">Belum Terekonsiliasi</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <!--End Advanced Tables -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <ul class="nav navbar-top-links navbar-left">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                        {{-- <i class="fa fa-circle fa-3x"></i> <i class="fa fa-caret-down"></i> --}}
                                        <button class="btn btn-default btn-sm ml-auto" style="float: left;" > <i class="fa fa-chevron-down"></i> Filter</button>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Tandai Semua</a>
                                        </li>
                                        <li><a href="#">Terekonsiliasi</a>
                                        </li>
                                        <li><a href="#">Belum Terekonsiliasi</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <br>
                            <div>
                                <div class="radio3 radio-check radio-inline">
                                  <input type="radio" id="radio4" name="radio2" value="option1" checked="">
                                  <label for="radio4">
                                    Transaksi Rekening
                                  </label>
                                </div>
                                <div class="radio3 radio-check radio-success radio-inline">
                                  <input type="radio" id="radio5" name="radio2" value="option2">
                                  <label for="radio5">
                                    Kelompok Transaksi Rekening
                                  </label>
                                </div>
                              </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12"><br>
                                            <!--Advanced Tables -->
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead style="background-color: #008f73; color:#fff;">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Deskripsi</th>
                                                    <th>Terima</th>
                                                    <th>Kirim</th>
                                                    <th>Saldo</th>
                                                    <th>Sumber</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                <!--End Advanced Tables -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="messages">
                            <br>
                            <div class="row">
                                <div class="col-md-6"><br>
                                            <!--Advanced Tables -->
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead style="background-color: #008f73; color:#fff;">
                                                <tr>
                                                    <th>Rekening Koran</th>
                                                    <th>Terima (dalam IDR)</th>
                                                    <th>Bayar (dalam IDR)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <!--End Advanced Tables -->
                                </div>
                                <div class="col-md-6"><br>
                                    <!--Advanced Tables -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead style="background-color: #008f73; color:#fff;">
                                        <tr>
                                            <th>Transaksi Jurnal</th>
                                            <th>Terima (dalam IDR)</th>
                                            <th>Bayar (dalam IDR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                </table>
                            </div>
                        <!--End Advanced Tables -->
                        </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-default btn-sm ml-auto" style="float: right;" > 0 Rekonsiliasi</button>
                                    <button class="btn btn-default btn-sm ml-auto" style="float: right;" > Hapus yang dipilih</button>
                                    <button class="btn btn-default btn-sm ml-auto" style="float: right;" > Reset Ulang</button>
                                    <br><br><br>
                                            <!--Advanced Tables -->
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead style="background-color: #008f73; color:#fff;">
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Deskripsi</th>
                                                    <th>Terima</th>
                                                    <th>Kirim</th>
                                                    <th>Saldo</th>
                                                    <th>Sumber</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                <!--End Advanced Tables -->
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
</div> 
    
@endsection