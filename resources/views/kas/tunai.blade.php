@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>(1-10001) UANG TUNAI</strong>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    {{-- <i class="fa fa-circle fa-3x"></i> <i class="fa fa-caret-down"></i> --}}
                    <button class="btn btn-default btn-sm ml-auto" style="float: right;" > <i class="fa fa-chevron-down"></i> Pilihan</button>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Impor Laporan Bank</a>
                    </li>
                    <li><a href="{{route('tautan')}}">Tautan Tunai</a>
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
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Transfer Uang</a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#myModals">Terima Uang</a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#myModalz">Kirim Uang</a>
                    </li>
                </ul>
            </li>
        </ul>
    </h1><br>

    <div class="row">
        <div class="col-md-12">
            <!--  Modals Transfer-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"><strong>TRANSFER UANG</strong></h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-12">
                                    <form>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Transfer Dari</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Akun Pembayaran</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Setor Ke</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Plih Akun Pembayaran</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Jumlah</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Rp.0,00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Tag</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Pilih Tag">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">No. Transaksi</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Auto">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Tgl. Transaksi</div>
                                                <input type="date" class="form-control" id="exampleInputEmail2" placeholder="Pilih Tanggal">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Memo</div>
                                                <textarea class="form-control" name="memo" id="memo" cols="30" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Lampiran</div>
                                                <input type="file" class="form-control" id="exampleInputEmail2">
                                            </div>
                                        </div>
                                        <br><br>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-default">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- End Modals-->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!--  Modals Terima-->
                <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"><strong>TERIMA UANG</strong></h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-12">
                                    <form>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Setor Ke</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Akun Pembayaran</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="float: right;">
                                                <div class="sub-title">Jumlah Total :</div>
                                                <div>
                                                    <h2><strong>Rp. 0,00</strong></h2>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Pembeli</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Tgl. Transaksi</div>
                                                <input type="date" class="form-control" id="exampleInputEmail2" placeholder="Pilih Tanggal">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">No. Transaksi</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Auto">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Tag</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Pilih Tag">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Terima Dari</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Deskripsi</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Pajak</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Pajak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Jumlah</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Terima Dari</div> --}}
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Deskripsi</div> --}}
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Pajak</div> --}}
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Pajak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Jumlah</div> --}}
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-default btn-sm ml-auto" > <i class="fa fa-plus"></i> Tambah Data</button>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Memo</div>
                                                <textarea class="form-control" name="memo" id="memo" cols="30" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Lampiran</div>
                                                <input type="file" class="form-control" id="exampleInputEmail2">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="float: right;">
                                                <div class="sub-title">Sub Total Rp. 0,00</div>
                                                <div>
                                                    <h2><strong>Total Rp. 0,00</strong></h2>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <br><br>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-default">Buat Penerima</button>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- End Modals-->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!--  Modals Kirim-->
                <div class="modal fade" id="myModalz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel"><strong>KIRIM UANG</strong> </h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-12">
                                    <form>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="sub-title">Bayar Dari</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Akun Pembayaran</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="float: right;">
                                                <div class="sub-title">Jumlah Total :</div>
                                                <div>
                                                    <h2><strong>Rp. 0,00</strong></h2>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Penerima</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Tgl. Transaksi</div>
                                                <input type="date" class="form-control" id="exampleInputEmail2" placeholder="Pilih Tanggal">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">No. Transaksi</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Auto">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Tag</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Pilih Tag">
                                            </div>
                                        </div>
                                        <div class="col-md-12">   
                                            <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="radio4" name="radio2" value="option1" checked="">
                                            <label for="radio4">
                                                Akun
                                            </label>
                                            </div>
                                            <div class="radio3 radio-check radio-success radio-inline">
                                            <input type="radio" id="radio5" name="radio2" value="option2">
                                            <label for="radio5">
                                                Pengeluaran
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Terima Dari</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Deskripsi</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Pajak</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Pajak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="sub-title">Jumlah</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Terima Dari</div> --}}
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Deskripsi</div> --}}
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Pajak</div> --}}
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Pajak</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Jumlah</div> --}}
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-default btn-sm ml-auto" > <i class="fa fa-plus"></i> Tambah Data</button>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Memo</div>
                                                <textarea class="form-control" name="memo" id="memo" cols="30" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Lampiran</div>
                                                <input type="file" class="form-control" id="exampleInputEmail2">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="float: right;">
                                                <div class="sub-title">Sub Total Rp. 0,00</div>
                                                <div>
                                                    <h2><strong>Total Rp. 0,00</strong></h2>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <br><br>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-default">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- End Modals-->
        </div>
    </div>

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