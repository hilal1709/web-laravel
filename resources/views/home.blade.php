@extends('layouts.app')

@section('title', 'Beranda - Aplikasi Mahasiswa')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Selamat Datang di Aplikasi Manajemen Mahasiswa</h1>
    <p class="lead">Ini adalah aplikasi manajemen mahasiswa sederhana yang dibangun dengan Laravel.</p>
    <hr class="my-4">
    <p>Anda dapat melihat daftar mahasiswa dan detail mereka.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('students.index') }}" role="button">Lihat Mahasiswa</a>
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Direktori Mahasiswa</h5>
                <p class="card-text">Jelajahi direktori mahasiswa kami yang komprehensif.</p>
                <a href="{{ route('students.index') }}" class="btn btn-outline-primary">Jelajahi</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Program Studi</h5>
                <p class="card-text">Jelajahi berbagai program akademik yang ditawarkan.</p>
                <a href="#" class="btn btn-outline-primary">Jelajahi</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sumber Daya</h5>
                <p class="card-text">Akses sumber daya mahasiswa dan materi pembelajaran.</p>
                <a href="#" class="btn btn-outline-primary">Akses</a>
            </div>
        </div>
    </div>
</div>
@endsection
