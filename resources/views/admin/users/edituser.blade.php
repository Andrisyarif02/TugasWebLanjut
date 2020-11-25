@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="badge badge-danger">
            <h3>Edit Artikel</h3>
        </div>
        
        <form action="/manageUser/update/{{$users->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$users->id}}"></br>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" required="required" name="name" value="{{$users->name}}"></br>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" required="required" name="image" accept="image/*"></br>
                <img width="150px" src="{{asset('storage/'.$users->image)}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" required="required" name="email" value="{{$users->email}}"></br>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" required="required" name="password" value="{{$users->password}}"></br>
            </div>
            <div class="form-group">
                <label for="roles">Roles</label>
                <input type="text" class="form-control" required="required" name="roles" value="{{$users->roles}}"></br>
            </div>
            <button type="submit" name="edit" class="btn btn-danger float-right">Ubah Data</button>
        </form>
    </div>
</div>
@endsection