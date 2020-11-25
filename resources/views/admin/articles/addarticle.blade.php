@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">      
    <form action="/artikel/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control"  required="required" name="title"></br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" required="required" name="content"></br>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" required="required" name="genre"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>       
    </div>
</div>
@endsection