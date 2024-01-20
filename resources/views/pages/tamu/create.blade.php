@extends('layouts.app')

@section('body')
    <h1  class="mb-0">Form Buku Tamu</h1>
    <hr />
    <div class="container">
        <form action="{{ route('tamu.store') }}" method="POST">
        @csrf    
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Nama</h5></label>
                <input type="text" class="form-control form-control-md" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Instansi</h5></label>
                <input type="text" class="form-control form-control-md" id="instansi" name="instansi" placeholder="Masukkan Asal Instansi Anda">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Nomor Telepon</h5></label>
                <input type="text" class="form-control form-control-md" id="notelp" name="notelp" placeholder="Masukkan Nomor Telepon/WA Anda">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><h5>Keperluan</h5></label>
                <input type="text" class="form-control form-control-md" id="keperluan" name="keperluan" placeholder="Tuliskan Keperluan Anda">
            </div>
            
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

@endsection
