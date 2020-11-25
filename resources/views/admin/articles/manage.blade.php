@extends('layouts.master')
@section('content')
<div class="col-lg-8">
  <div class="card">
      <div class="card-header text-center">
          <h3>Daftar Artikel</h3>
      </div>
      <a href="artikel/add" class="btn btn-primary">Tambah Data</a>
      <br><br>
      <div class="cardbody">
          <table class="table table-bordered table-striped">
          <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Genre</th>
              <th>Tanggal</th>
              <!-- <th>Image</th> -->
          </tr>
          </thead>
          <tbody>
          @foreach($articles as $a)
          <tr>
              <td>{{$a->id}}</td>
              <td>{{$a->title}}</td>
              <td>{{$a->genre}}</td>
              <td>{{$a->created_at}}</td>
              <!-- <td><img src="{{ asset('/img/'.$a->featured_image) }}" alt="ImageCap"></td> -->
              <!-- <td>{{ $a->featured_image }}</td> -->
              <td>
                  <a href="artikel/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                  <a href="artikel/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                  <a href="/article/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
              </td>
          </tr>
          @endforeach
          </tbody>
          </table>
      </div>
  </div>
</div>

@endsection
