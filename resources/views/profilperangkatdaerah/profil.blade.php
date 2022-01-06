@extends('layouts.global')
@section('title', 'Profil')
@section('container')
   <h1 class="h3 col-md-6 row-md-8 mb-3 justify-content-around mb-0 text-gray-800 font-weight-bold">Profil Perangkat Daerah</h1>
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
         <button type="button" class="btn btn-primary btn-lg float-right btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Simpan</button>
      </div>
   </div>
</form>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        Apakah anda yaking ingin Submit?<br>Mohon periksa kembali isian anda
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection

