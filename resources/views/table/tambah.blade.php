@extends('template/header')

@section('container')

<div class="container">
    <div class="row my-4">

        <div class="col col-md-8">
            <form action="/tambah-data" method="post">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                    <label for="bin">NIM Mahasiswa</label>
                    <input type="text" class="form-control  @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="NIM Mahasiswa" value="{{ old('nim') }}">
                    @error('nim')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="bin">Email Mahasiswa</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Mahasiswa" value="{{ old('email') }}">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="bin">Jurusan Mahasiswa</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan Mahasiswa" value="{{ old('jurusan') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>

@endsection