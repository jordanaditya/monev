@extends('layouts.global')
@section('title', 'Profil')
@section('container')
   <h1 class="h3 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Profile Perangkat Daerah</h1>
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
   <div class="ml-4 row">
      <div class="col-sm-8">
         <button type="button" class="btn btn-primary btn-lg float-right btn-sm">Simpan</button>
      </div>
   </div>
</form>
</div>
@endsection

