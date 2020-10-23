@extends('master')
@section('content')
<div class="class container">
    <div class="class row">
    <div class="col-lg-8">
        <div class="card">
            <div class="badge badge-danger">
                <h3>Edit Artikel</h3>
            </div>
            
            <form action="/artikel/update/{{$articles->id}}" method="post">
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
                    <input type="text" class="form-control" required="required" name="image" value="{{$articles-> featured_image}}"></br>
                </div>
                <button type="submit" name="edit" class="btn btn-danger float-right">Ubah Data</button>
            </form>
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