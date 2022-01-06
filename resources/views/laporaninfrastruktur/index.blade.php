@extends('layouts.global')
@section('title', 'Laporan Infrastruktur TIK')
@section('container')
<div class="row-3">
    <h1 class="h3 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Monev Infrastruktur TIK</h1>
</div>

<div class="container">
    <br><br>

    <div class="row">
        <div class="col">
            <img src="{{ asset('img/user.png') }}" width="85px" height="85px">
            <div class="col-md-3 text-blue">Profil Perangkat Daerah</div>
        </div>
        <div class="col">
            <img src="{{ asset('img/document.png') }}" width="85px" height="85px">
            <div class="col-md-3 text-blue">Prosedur/Kebijakan Bidang TIK</div>
        </div>
        <div class="col">
            <img src="{{ asset('img/computer.png') }}" width="85px" height="85px">
            <div class="col-md-3 text-blue">Sistem Aplikasi</div>
        </div>
        <div class="col">
            <img src="{{ asset('img/dna.png') }}" width="85px" height="85px">
            <div class="col-md-3 text-blue">Perencanaan dan Anggaran</div>
        </div> 
    </div> 
</div>




@endsection