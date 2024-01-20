@extends('layouts.app')

@section('body')
    <div class ="d-flex align-items-center justify-content-between">
        <h1  class="mb-0">Data Daftar Tamu</h1>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('tamu.create')}}" class="btn btn-primary">Tambah Data</a>
            <a href="{{ route('cetak-tamu')}}" target=_blank class="btn btn-secondary">Cetak Data</a>
        </div>
    </div>
    
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        Data Tamu Berhasil Ditambahkan !
        {{ Session::get('successs')}}
    </div>
    @endif

    <table class="table table-hover">
        <thead class="table-dark ">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>No Telp/WA</th>
                <th>Keperluan</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($tamus->count() > 0)
              @foreach($tamus as $tamu)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $tamu->nama }}</td>
                    <td class="align-middle">{{ $tamu->instansi }}</td>
                    <td class="align-middle">{{ $tamu->notelp }}</td>
                    <td class="align-middle">{{ $tamu->keperluan }}</td>
                    <td class="align-middle">{{ $tamu->created_at }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('tamu.show', $tamu->id)}}" type="button" class="btn btn-secondary">Detail</a>
                            <!-- <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button> -->
                        </div>
                    </td>
                </tr>
              @endforeach
            
            @else
                <tr>
                    <td class="text-center" colspan="7">Tamu tidak ditemukan</td>
                </tr>
            @endif

        </tbody>
    </table>



    @endsection