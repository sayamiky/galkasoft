@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>PERATURAN REKONSILIASI</strong>
        <button class="btn btn-default btn-sm ml-auto" data-toggle="modal" data-target="#myModal" style="float: right;" > <i class="fa fa-pencil-square-o"></i> Buat Peraturan Baru</button>

    </h1>
    <div class="row">
        <div class="col-md-12">
            <!--  Modals-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">BUAT PERATURAN BARU</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-12">
                                    <form>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Nama Aturan</div>
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Masukan nama aturan">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Untuk</div>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Masukan fungsi aturan">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">Akun</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option value="AK">Semua</option>
                                                            <option value="HI">Beberapa</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <br><br>
                                        <div>
                                            1. Sewaktu-waktu transaksi bank menemukan    
                                            <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="radio4" name="radio2" value="option1" checked="">
                                            <label for="radio4">
                                                Semua
                                            </label>
                                            </div>
                                            <div class="radio3 radio-check radio-success radio-inline">
                                            <input type="radio" id="radio5" name="radio2" value="option2">
                                            <label for="radio5">
                                                Salah satu dari kondisi dibawah ini :
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Akun</div> --}}
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option value="AK">Deskripsi</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Akun</div> --}}
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option value="AK">Mengandung</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                {{-- <div class="sub-title">Untuk</div> --}}
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <br> 2. Catat di Jurnal Sebagai Deposi Bank : <br>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="sub-title">Kategori</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Akun</option>
                                                            <option value="HI">Beberapa</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">% dari jumlah</div>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="sub-title">Kategori</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Akun</option>
                                                            <option value="HI">Beberapa</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="sub-title">% dari jumlah</div>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="float: right;">
                                            Total 100%
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="sub-title">Kontak</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Pilih Kontak</option>
                                                            <option value="HI">Beberapa</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="sub-title">Memo</div>
                                                <div>
                                                    <select class="form-control">
                                                        <optgroup>
                                                            <option>Berdasarkan Transaksi</option>
                                                            <option value="HI">Beberapa</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <div class="checkbox">
                                                <div class="checkbox3 checkbox-round">
                                                  <input type="checkbox" id="checkbox-1">
                                                  <label for="checkbox-1">
                                                    Simpan Otomatis di Jurnal Saya
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
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
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead style="background-color: #008f73; color:#fff;">
                        <tr>
                            <th>No.</th>
                            <th>Terapkan Ke</th>
                            <th>Nama Aturan</th>
                            <th>Kondisi Pencocokan</th>
                            <th>Catat Sebagai</th>
                            <th>Catat Otomatis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <!-- /. ROW  -->
    <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
</div> 

    
@endsection