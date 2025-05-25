@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Detail Mahasiswa</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">ID:</div>
                    <div class="col-md-8">{{ $student['id'] }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Nama:</div>
                    <div class="col-md-8">{{ $student['name'] }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">NIM:</div>
                    <div class="col-md-8">{{ $student['nim'] }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Program Studi:</div>
                    <div class="col-md-8">{{ $student['program'] }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 fw-bold">Semester:</div>
                    <div class="col-md-8">{{ $student['semester'] }}</div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection
