@extends('layouts.master')
@section('content')
<div class="header"> 
    <h1 class="page-header">
        <strong>LAPORAN</strong>
    </h1>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    Basic Tabs
                </div> -->
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">SEKILAS BISNIS</a>
                        </li>
                        <li class=""><a href="#profile" data-toggle="tab">PENJUALAN</a>
                        </li>
                        <li class=""><a href="#messages" data-toggle="tab">PEMBELIAN</a>
                        </li>
                        <li class=""><a href="#settings" data-toggle="tab">PRODUK</a>
                        </li>
                        <li class=""><a href="#aset" data-toggle="tab">ASET</a>
                        </li>
                        <li class=""><a href="#bank" data-toggle="tab">BANK</a>
                        </li>
                        <li class=""><a href="#pajak" data-toggle="tab">PAJAK</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Neraca</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Laporan Laba-Rugi</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Arus Kas</strong></h4>
                                        <img src="assets/img/c.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Perubahan Modal</strong></h4>
                                        <img src="assets/img/d.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Anggaran Laba Rugi</strong></h4>
                                        <img src="assets/img/e.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Buku Besar</strong></h4>
                                        <img src="assets/img/f.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Jurnal</strong></h4>
                                        <img src="assets/img/g.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Neraca Saldo</strong></h4>
                                        <img src="assets/img/h.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Ringkasan Bisnis</strong></h4>
                                        <img src="assets/img/i.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Manajemen Anggaran</strong></h4>
                                        <img src="assets/img/j.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Daftar Penjualan</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Laporan Piutang Pelanggan</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Laporangan Pengiriman Penjualan</strong></h4>
                                        <img src="assets/img/c.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Penyelesaian Pemesanan Penjualan</strong></h4>
                                        <img src="assets/img/d.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Penjualan Per Pelanggan</strong></h4>
                                        <img src="assets/img/e.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Usia Piutang</strong></h4>
                                        <img src="assets/img/f.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Penjualan Per Produk</strong></h4>
                                        <img src="assets/img/g.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="messages">
                            <br>
                            <div class="row">
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Daftar Pembelian</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Laporan Hutang Supplier</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Rincian Pengeluaran</strong></h4>
                                        <img src="assets/img/c.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Laporan Pengiriman Pembelian</strong></h4>
                                        <img src="assets/img/d.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Penyelesaian Pemesanan Pembelian</strong></h4>
                                        <img src="assets/img/e.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Pembelian Per Supplier</strong></h4>
                                        <img src="assets/img/f.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Daftar Pengeluaran</strong></h4>
                                        <img src="assets/img/g.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Usia Hutang</strong></h4>
                                        <img src="assets/img/h.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Pembelian Per Produk</strong></h4>
                                        <img src="assets/img/i.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Ringkasan Persedian Barang</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Nilia Persedian Barang</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Rincian Persedian Barang</strong></h4>
                                        <img src="assets/img/c.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Kuantitas Stok Gudang</strong></h4>
                                        <img src="assets/img/d.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Nilai Stok Gudang</strong></h4>
                                        <img src="assets/img/e.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Pergerakan Barang Gudang</strong></h4>
                                        <img src="assets/img/f.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Penjualan Per Produk</strong></h4>
                                        <img src="assets/img/g.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="aset">
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Ringkasan Aset Tetap</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Detail Aset Tetap</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Aset Yang Dijual Dan Disingkirkan</strong></h4>
                                        <img src="assets/img/c.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bank">
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Laporan Rekonsiliasi</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Mutasi Rekening</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pajak">
                            <br>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="panel panel-success">
                                        <center>
                                            <h4><strong>Laporan Pajak Pemotongan</strong></h4>
                                        <img src="assets/img/a.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
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
                                            <h4><strong>Laporan Pajak Penjualan</strong></h4>
                                        <img src="assets/img/b.png" alt="">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button type="submit" class="btn btn-default">Lihat Laporan</button>
                                        </div>
                                        <!-- <div class="panel-footer">
                                            Panel Footer
                                        </div> -->
                                        </center>
                                    </div>
                                </div>
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