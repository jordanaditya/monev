@extends('layouts.global')
@section('title', 'Laporan Infrastruktur TIK')
@section('container')
<div class="container">
    <br>
    <div class="container">
        <div class="row">
        <div class="col-10">
            <h1 class="h3 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Monev Infrastruktur TIK</h1>
        </div>
        </div>
    </div>

    <div class="container">
        <br><br>

        <div class="row">
            <div class="col">
                <img src="{{ asset('img/user.png') }}" width="85px" height="85px">
                <br><br>
                <div class="text-blue-800" style="font-size:15px;">Profil Perangkat Daerah</div>
            </div>
            <div class="col">
                <img src="{{ asset('img/document.png') }}" width="85px" height="85px">
                <br><br>
                <div class="text-blue">Prosedur/Kebijakan Bidang TIK</div>
            </div>
            <div class="col">
                <img src="{{ asset('img/computer.png') }}" width="85px" height="85px">
                <br><br>
                <div class="text-blue">Sistem Aplikasi</div>
            </div>
            <div class="col">
                <img src="{{ asset('img/dna.png') }}" width="85px" height="85px">
                <br><br>
                <div class="text-blue">Perencanaan dan Anggaran</div>
            </div> 
        </div> 
    </div>


    <br><br>
    <div class="container">
        <div class="row">
        <div class="col-10">
            <h1 class="h3 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Laporan Infrastruktur TIK</h1>
            <h6 class="h6 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800">*Akan muncul setelah melengkapi semua form</h1>
        </div>
        <div class="col-1">
        <button class=" btn btn-secondary form-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            2021
        </button>
        </div>
        </div>
    </div>

    <br>
    <div class="col-lg-12">
        <form method="post" action="#" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect" >Nama Perangkat Daerah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Nama Pemimpin Perangkat Daerah</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Alamat Kantor</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Telepon/Faksimili</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Alamat Email</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Nama Pengelola/ Penanggungjawab TIK</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Nomor Handphone Pengelola/ Penanggungjawab TIK</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        <div class="ml-4 row">
            <label for="inputText" class="col-sm-4 col-form-label font-perfect">Alamat Email Pengelola/ Penanggungjawab TIK</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-rounded" id="inputText" required>
            </div>
        </div>
        <br>
        </form>
    </div>
    
</div>





@endsection