@extends('layouts.app')

@section('body')
    <h1  class="mb-0">Detail Data Tamu</h1>
    <hr />
    <div class="container">   
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Nama</h5></label>
                <input type="text" class="form-control form-control-md" id="nama" name="nama" value="{{ $Tamu->nama}}" placeholder="Masukkan Nama Lengkap Anda" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Instansi</h5></label>
                <input type="text" class="form-control form-control-md" id="instansi" name="instansi" value="{{ $Tamu->instansi}}" placeholder="Masukkan Asal Instansi Anda" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Nomor Telepon</h5></label>
                <input type="text" class="form-control form-control-md" id="notelp" name="notelp" value="{{ $Tamu->notelp}}" placeholder="Masukkan Nomor Telepon/WA Anda" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Keperluan</h5></label>
                <input type="text" class="form-control form-control-md" id="keperluan" name="keperluan" value="{{ $Tamu->keperluan}}" placeholder="Tuliskan Keperluan Anda" readonly>
            </div>
    </div>

@endsection
