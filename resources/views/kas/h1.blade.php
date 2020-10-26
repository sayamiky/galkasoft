@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>HUBUNGKAN BANK</strong>
    </h1> <br><br>
    <div class="row">
            <div class="col-md-3">
                <center>
                    <button class="btn btn-default btn-lg"  ><a href="{{route('h1')}}" style="text-decoration: none; color:#000;">1. ISI FORMULIR</a> </button>
                </center>
                </div>
            <div class="col-md-3 col-sm-3">
                <center>
                    <button class="btn btn-primary btn-lg"  ><a href="{{route('h2')}}" style="text-decoration: none; color:#000;">2. DALAM PENINJAUAN</a> </button>
                </center>
            </div>
            <div class="col-md-3 col-sm-3">
                <center>
                    <button class="btn btn-primary btn-lg"  ><a href="{{route('h3')}}" style="text-decoration: none; color:#000;">3. TANDA TANGAN DAN KIRIM</a> </button>
                </center>
            </div>
            <div class="col-md-3 col-sm-3">
                <center>
                    <button class="btn btn-primary btn-lg"  ><a href="{{route('h4')}}" style="text-decoration: none; color:#000;">4. AKTIVASI</a> </button>
                </center>
            </div>
        </div><br><br> 

    <div class="row">
        <div class="col-md-12">
            <strong>PROFILE BANK</strong> <br> 
        </div>    
        <div class="col-md-3">
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
        <div class="col-md-3">
            <div class="form-group">
                <div class="sub-title">Jumlah</div>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Rp.0,00">
            </div>
        </div>
        <div class="col-md-3">
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
        <div class="col-md-3">
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
    </div><br>

    <div class="row">
        <div class="col-md-12">
            <strong>PROFILE BANK</strong> <br>
        </div>    
        <div class="col-md-3">
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
        <div class="col-md-3">
            <div class="form-group">
                <div class="sub-title">Jumlah</div>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Rp.0,00">
            </div>
        </div>
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
            <div class="form-group">
                <div class="sub-title">Lampiran</div>
                <input type="file" class="form-control" id="exampleInputEmail2">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <div class="sub-title">Lampiran</div>
                <input type="file" class="form-control" id="exampleInputEmail2">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="sub-title">Memo</div>
                <textarea class="form-control" name="memo" id="memo" cols="30" rows="6"></textarea>
            </div>
        </div>
    </div><br><hr>

    <div class="row">
        <div class="col-md-12">
            <strong>PILIHAN</strong> <br> 
        </div> 
        <div class="col-md-12">   
            <div class="radio3 radio-check radio-inline">
            <input type="radio" id="radio4" name="radio2" value="option1" checked="">
            <label for="radio4">
                Umpan Tautan Tunai
            </label>
            </div>
            <div class="radio3 radio-check radio-success radio-inline">
            <input type="radio" id="radio5" name="radio2" value="option2">
            <label for="radio5">
                Transfer Tautan Tunai
            </label>
            </div>
        </div>
    </div><br>
    <div class="col-md-12">
        <button type="button" class="btn btn-default" style="float: right;">Kembali</button>
        <button type="button" class="btn btn-default" style="float: right;">Simpan</button>
    </div><br><br>
    <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
</div> 

    
@endsection