@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Daftar Mahasiswa</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student['id'] }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['nim'] }}</td>
                        <td>{{ $student['program'] }}</td>
                        <td>
                            <a href="{{ route('students.show', $student['id']) }}" class="btn btn-sm btn-info">Lihat Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
