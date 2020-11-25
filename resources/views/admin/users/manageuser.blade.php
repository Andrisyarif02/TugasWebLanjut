@extends('layouts.master')
@section('content')
<div class="col-lg-8">
  <div class="card">
    <div class="card-header text-center">
        <h3>Daftar User</h3>
    </div>
    <a href="manageUser/add" class="btn btn-primary">Tambah User</a>
    <br><br>
    <div class="cardbody">
        <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Profil</th>
            <th>email</th>
            <th>Roles</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $b)
        <tr>

            <td>{{$b->name}}</td>
            <td><img width="150px" src="{{ asset('/storage/'.$b->image) }}" alt="ImageCap"></td> 
              <!-- <td>{{ $b->image }}</td> -->
            <td>{{$b->email}}</td>
            <td>{{$b->roles}}</td>
            <td>
                <a href="/manageUser/edit/{{ $b->id }}" class="badge badge-warning">Edit</a>
                <a href="/manageUser/delete/{{ $b->id }}" class="badge badge-danger">Hapus</a>
                <a href="/manageUser/cetakpdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
</div>
@endsection