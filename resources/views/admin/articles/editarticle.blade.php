@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="badge badge-danger">
            <h3>Edit Artikel</h3>
        </div>
        
        <form action="/artikel/update/{{$articles->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$articles->id}}"></br>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title" value="{{$articles->title}}"></br>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" required="required" name="content" value="{{$articles->content}}"></br>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" required="required" name="genre" value="{{$articles->genre}}"></br>
            </div>
            <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="file" class="form-control" required="required" name="image" accept="image/*"></br>
                <img width="150px" src="{{asset('storage/'.$articles->featured_image)}}">
            </div>
            <button type="submit" name="edit" class="btn btn-danger float-right">Ubah Data</button>
        </form>
    </div>
</div>
@endsection