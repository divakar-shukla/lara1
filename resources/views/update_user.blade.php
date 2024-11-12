@extends('template')
@section('title', 'Add User')

@section('sidebar')
@parent
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Update User</h3>
            <form action="/addUser" method="POST">
                @csrf
                <input type="text" name="name" class="form-control mb-2" placeholder="Name">
                <input type="text" name="email" class="form-control mb-2" placeholder="Email">
                <input type="password" name="password" class="form-control mb-2" placeholder="Password">
                <input type="text" name="token" class="form-control mb-2" placeholder="Token">
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection