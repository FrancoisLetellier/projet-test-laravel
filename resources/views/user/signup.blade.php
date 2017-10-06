@extends('admin.template')
@extends('layout.navbar')
@section('content')
    <div class="signup">
        <div class="d-flex justify-content-center">
            <form class="col-sm-3">
                <h1 class="text-center">Join us</h1>
                <div class="form-group">
                    <label for="name">Firstname</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                    <div class="form-group">
                    <label for="example-email-input">Email</label>
                    <input class="form-control" type="email" value="YourEmail@exemple.com" id="example-email-input">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter password">
                    <label for="name">Password Retype</label>
                    <input type="text" class="form-control" id="name" placeholder="Retype password">
                </div>
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href=""><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-12">
                <a href="{!! url('/') !!}"><i class="fa fa-home fa-3x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    @endsection