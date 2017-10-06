@extends('admin.template')
@extends('layout.navbar')
@section('content')

    <h1 class="text-center search-title">Search games</h1>
    <div class="row justify-content-md-center search-bar">
        <input class="form-control col-sm-2" type="text" placeholder="Enter your game" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 ml-4" type="submit">Search</button>
    </div>
    <h3 class="text-center">Last games reviewed</h3>
@endsection