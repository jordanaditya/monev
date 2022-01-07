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
                    <img src="{{ asset('img/user.png') }}" width="85px" height="85px" class="rounded mx-auto d-block">
                    <br><br>
                    <div class="text-blue-800 text-center" style="font-size:15px;">Profil Perangkat Daerah</div>
                </div>
                
                <div class="col">
                    <img src="{{ asset('img/document.png') }}" width="85px" height="85px" class="rounded mx-auto d-block">
                    <br><br>
                    <div class="text-blue text-center">Prosedur/Kebijakan Bidang TIK</div>
                </div>

                <div class="col">
                    <img src="{{ asset('img/computer.png') }}" width="85px" height="85px" class="rounded mx-auto d-block">
                    <br><br>
                    <div class="text-blue text-center">Sistem Aplikasi</div>
                </div>

                <div class="col">
                    <img src="{{ asset('img/dna.png') }}" width="85px" height="85px" class="rounded mx-auto d-block">
                    <br><br>
                    <div class="text-blue text-center">Perencanaan dan Anggaran</div>
                </div> 

            </div>     
    </div>


    <br><br>
    <div class="container">
        <div class="row">
        <div class="col-10">
            <h1 class="h3 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Laporan Infrastruktur TIK</h1>
            <div type ="text" class="col-sm-6 col-form-label font-perfect">*Akan muncul setelah melengkapi semua form</div>
        </div>
        <div class="col-1">
        <button class=" btn btn-secondary form-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            2021
        </button>
        </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h4 class="h4 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Profil Perangkat Daerah</h4>
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
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h4 class="h4 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Layanan</h4>
                <div type ="text" class="col-sm-6 col-form-label font-perfect">Jenis pelayanan publik di perangkat daerah Anda</div>
            </div> 
        </div>
    </div>
    
    <br>
    <div class=container>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-borderless col-12">
                    <thead>
                        <tr>
                        <th scope="col-sm-10">No</th>
                        <th scope="col-10">Jenis Pelayanan Publik</th>
                        <th scope="col-10">Penjelasan Alur/Proses Layanan</th>
                        <th scope="col-10">Diagram Alir Layanan</th>
                        <th scope="col-10">Sudah menggunakan alat bantu TIK?(Aplikasi)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <!-- <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td> -->
                        </tr>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
    
    
</div>





@endsection