@extends('template/header')

@section('title', 'Halaman Kontak')
@section('text', 'Ini adalah halaman kontak berisi informasi oemilik website')

@section('container')
    <h2>@yield('title')</h2>
    <p>@yield('text')</p>
@endsection