@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>KONEKSI TAUTAN TUNAI</strong>
    </h1>
    UNTUK BERBAGAI KEMUDAHAN TRANSAKSI KAS & BANK ANDA <br><br>
    <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-success">
                    <center>
                        <h4><strong>Rekonsiliasi Bank</strong></h4>
                    <img src="assets/img/a.png" alt="">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        {{-- <button type="submit" class="btn btn-default">Lihat Laporan</button> --}}
                    </div>
                    <!-- <div class="panel-footer">
                        Panel Footer
                    </div> -->
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-success">
                    <center>
                        <h4><strong>Umpan Tautan Tunai</strong></h4>
                    <img src="assets/img/b.png" alt="">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        {{-- <button type="submit" class="btn btn-default">Lihat Laporan</button> --}}
                    </div>
                    <!-- <div class="panel-footer">
                        Panel Footer
                    </div> -->
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-success">
                    <center>
                        <h4><strong>Transfer Tautan Tunai</strong></h4>
                    <img src="assets/img/c.png" alt="">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur.</p>
                        {{-- <button type="submit" class="btn btn-default">Lihat Laporan</button> --}}
                    </div>
                    <!-- <div class="panel-footer">
                        Panel Footer
                    </div> -->
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-success">
                    <center>
                        <h4><strong>Prioritas Keamanan</strong></h4>
                    <img src="assets/img/d.png" alt="">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        {{-- <button type="submit" class="btn btn-default">Lihat Laporan</button> --}}
                    </div>
                    <!-- <div class="panel-footer">
                        Panel Footer
                    </div> -->
                    </center>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
            HUBUNGKAN BANK KE JURNAL <br><br>  
        </div>    
        <div class="col-md-12">
        <button class="btn btn-default btn-sm ml-auto"  ><a href="{{route('h1')}}" style="text-decoration: none; color:#000;">Hubungkan</a> </button>
        <button class="btn btn-default btn-sm ml-auto"  ><a href="#" style="text-decoration: none; color:#000;">Ajukan Bank Lain</a> </button>

        </div>
    </div><br>

    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK MANDIRI</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK BCA</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK BCA</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK BNI</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK BNI SYARIAH</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK CIMB NIAGA</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="panel panel-success">
                <center>
                    <h4><strong>BANK DANAMON</strong></h4>
                    <img src="assets/img/a.png" alt=""><br><br>
                </center>
            </div>
        </div>
    </div>
    
    <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
</div> 

    
@endsection