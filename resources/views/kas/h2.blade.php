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
                    <button class="btn btn-default btn-lg"  ><a href="{{route('h2')}}" style="text-decoration: none; color:#000;">2. DALAM PENINJAUAN</a> </button>
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
        
            <div class="col-md-4">
                    <strong>PROFILE BANK</strong> <br> 
                <table>
                        <tr>
                        <td width="250">Nama Bank</td> 
                        <td width="250">Mandiri</td>    
                    </tr> 
                    <tr>
                        <td width="250">ID Perusahaan</td> 
                        <td width="250">Pribadi (CID 90890)</td>    
                    </tr> 
                    <tr>
                        <td width="250">Tipe Akun Bank</td> 
                        <td width="250">Personal</td>    
                    </tr> 
                    <tr>
                        <td width="250">Hubungkan Ke Akun</td> 
                        <td width="250">(1-10001) Cash</td>    
                    </tr>    
                </table>    
            </div>
            <div class="col-md-4">
                <strong>INFORMASI REKENING</strong> <br> 
                <table>
                        <tr>
                        <td width="250">Nama Pemilik Rekening</td> 
                        <td width="250">XXX</td>    
                    </tr> 
                    <tr>
                        <td width="250">Nomor Rekening</td> 
                        <td width="250">1234567890</td>    
                    </tr> 
                    <tr>
                        <td width="250">Nama di KTP</td> 
                        <td width="250">Personal</td>    
                    </tr> 
                    <tr>
                        <td width="250">No. Induk Kependudukan (NIK)</td> 
                        <td width="250">(1-10001) Cash</td>    
                    </tr>
                    <tr>
                        <td width="250">KTP/KITAS</td> 
                        <td width="250">xxxx</td>    
                    </tr>  
                    <tr>
                        <td width="250">Buku Tabungan</td> 
                        <td width="250">BukuTabungan.jpg</td>    
                    </tr>  
                    <tr>
                        <td width="250">Catatan</td> 
                        <td width="250">Tidak Ada</td>    
                    </tr>    
                </table>    
            </div> 
            <div class="col-md-4">
                <strong>PILIHAN</strong> <br> 
                <table>
                        <tr>
                        <td width="250">Tipe</td> 
                        <td width="250">Umpan Tautan Tunai</td>    
                    </tr>     
                </table>    
            </div> 
        <br><hr>
<br>
    </div>
    <div class="col-md-12">
        <button type="button" class="btn btn-default" style="float: right;">Batal</button>
        <button type="button" class="btn btn-default" style="float: right;">Ubah Data</button>
    </div><br><br><br><br><br><br>
    <center><footer><p>Copy right 2020. All right reserved. </p></footer></center>
</div> 

    
@endsection