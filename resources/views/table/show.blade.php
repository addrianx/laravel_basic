@extends('template/header')

@section('container')

<div class="container">
    <div class="row">

        <div class="col col-md-6">
            <div class="card m-4">
                <div class="card-body">
                
                    <h5 class="card-title">{{$siswa->nama_mahasiswa}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$siswa->nim_mahasiswa}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$siswa->jurusan_mahasiswa}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$siswa->email_mahasiswa}}</h6>
                
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection