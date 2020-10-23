@extends('master')
@section('content')
<div class="class container"> 
    <div class="clas row">
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->title}}</td>
                        <td>{{$a->genre}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>
                            <a href="artikel/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
                            <a href="artikel/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">

<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-append">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
        <li>
        <a href="/categories/Moba">Game Moba</a>
      </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
        <li>
        <a href="/categories/FPS">Game FPS</a>
      </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Side Widget</h5>
  <div class="card-body">
    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
  </div>
</div>

</div>
    </div>
</div>

@endsection
