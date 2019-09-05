@extends('template/header')

@section('container')
<div class="container">
  <div class="row m-3">

  @if(Session::has('message'))
    <div class="col-8">
      <div class="alert {{Session::get('message')[0]}} alert-dismissible fade show" role="alert">
        <strong>{{Session::get('message')[1]}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  @endif

    <div class="col-12 my-4">
        <a class="btn btn-info" href="/tambah">Tambah Mahasiswa</a>
    </div>

    <div class="col-12">
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach( $user as $usr ) 
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><a href="/mahasiswa/{{$usr->id_mahasiswa}}">{{$usr->nama_mahasiswa}}</a></td>
            <td>{{$usr->nim_mahasiswa}}</td>
            <td>{{ $usr->jurusan_mahasiswa }}</td>
            <td>{{ $usr->email_mahasiswa }}</td>
            <td>
              <div class="badge badge-success"><a class="text-white" href="">Edit</a></div> 
              <div class="badge badge-danger"><a class="text-white" href="">Delete</a></div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      </div>
    </div>



</div>
</div>
@endsection