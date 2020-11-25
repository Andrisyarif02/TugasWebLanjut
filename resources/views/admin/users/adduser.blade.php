@extends('layouts.master')
@section('content')
<div class="col-lg-8">
    <div class="card">      
    <form action="/manageUser/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"  required="required" name="name"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" required="required" name="email"></br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" required="required" name="password"></br>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles"></br>
        </div>  
        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
    </form>       
    </div>
</div>
@endsection