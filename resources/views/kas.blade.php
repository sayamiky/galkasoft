@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>KAS DAN BANK</strong>
    </h1>

    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 10px;">
                    Pemasukan 30-Hari Mendatang (dalam IDR)
                </div>
                <div class="panel-body">
                    <p>Total</p>
                    <h3>Rp. 8.855.000,00</h3><br>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 10px;">
                    Pengeluaran 30-Hari Mendatang (dalam IDR)
                </div>
                <div class="panel-body">
                    <p>Total</p>
                    <h3>Rp. 259.435.000,00</h3><br>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 12px;">
                    <center>Saldo Kas (dalam IDR)</center>
                </div>
                <div class="panel-body">
                    <p>Total</p>
                    <h3>Rp. 259.435.000,00</h3><br>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 12px;">
                    <center>Saldo Kartu Kredit (dalam IDR)</center>
                </div>
                <div class="panel-body">
                    <p>Total</p>
                    <h3>Rp. 0,00</h3><br>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>
                <strong>DAFTAR AKUN KAS</strong>
            </h3>
            
        <button class="btn btn-default btn-sm ml-auto" style="float: right;" ><i class="fa fa-file"></i><a href="{{route('peraturan')}}" style="text-decoration: none; color:#000;"> Peraturan Rekonsiliasi</a> </button>
        
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            {{-- <div class="panel panel-default"> --}}
                {{-- <div class="panel-heading">
                     Advanced Tables
                </div> --}}
                {{-- <div class="panel-body"> --}}
                    <!--   Kitchen Sink -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead style="background-color: #008f73; color:#fff;">
                                <tr>
                                    <th>Kode Akun</th>
                                    <th>Nama Akun</th>
                                    <th>Saldo Bank</th>
                                    <th>Saldo di Jurnal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1-10001</td>
                                <td><a href="{{route('tunai')}}">Tunai</a></td>
                                    <td>0,00</td>
                                    <td class="center">769.000,00</td>
                                    <td class="center"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>1-10002</td>
                                    <td><a href="{{route('bank')}}">Akun Bank</a> </td>
                                    <td>163.814.000,00</td>
                                    <td class="center">266.264.000,00</td>
                                    <td class="center"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>1-10003</td>
                                    <td><a href="{{route('giro')}}">Giro</a> </td>
                                    <td>0,00</td>
                                    <td class="center">0,00</td>
                                    <td class="center"><i class="fa fa-trash-o"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        
                <!--Advanced Tables -->
                    {{-- <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead style="background-color: #008f73; color:#fff;">
                                <tr>
                                    <th>Kode Akun</th>
                                    <th>Nama Akun</th>
                                    <th>Saldo Bank</th>
                                    <th>Saldo di Jurnal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1-10001</td>
                                    <td><a href="">Tunai</a></td>
                                    <td>0,00</td>
                                    <td class="center">769.000,00</td>
                                    <td class="center"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>1-10002</td>
                                    <td><a href="">Akun Bank</a> </td>
                                    <td>163.814.000,00</td>
                                    <td class="center">266.264.000,00</td>
                                    <td class="center"><i class="fa fa-trash-o"></i></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>1-10003</td>
                                    <td><a href="">Giro</a> </td>
                                    <td>0,00</td>
                                    <td class="center">0,00</td>
                                    <td class="center"><i class="fa fa-trash-o"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
            <!--End Advanced Tables -->
        </div>
    </div>
        <!-- /. ROW  -->
    <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
</div> 

    
@endsection