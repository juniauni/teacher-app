@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-center mb-4">Data Guru</h1>
                    <div class="container">
                    <a href="/add-teacher" class="btn btn-success">Tambah Data</a>
                        <div class="row">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$row->nip}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->subject}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        <a href="/update-teacher/{{$row->id}}" class="btn btn-info">Edit</a>
                                        <a href="/delete-data-teacher/{{$row->id}}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection