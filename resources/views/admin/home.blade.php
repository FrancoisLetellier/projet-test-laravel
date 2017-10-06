@extends('admin.template')
@extends('layout.navbar')
@section('content')
    <div class="row d-flex justify-content-around">
        <div class="card">
            <img class="card-img-top" src="/images/games.jpg" alt="games image">
            <div class="card-body">
                <h3 class="card-title">Games</h3>
                <p class="card-text">Latest reviewed</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/platforms.jpg" alt="platforms image">
            <div class="card-body">
                <h3 class="card-title">Platforms</h3>
                <p class="card-text">Latest added</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/categories.png" alt="categories image">
            <div class="card-body">
                <h3 class="card-title">Categories</h3>
                <p class="card-text">Latest added</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="card card-users">
            <img class="card-img-top" src="/images/users.jpeg" alt="users image">
            <div class="card-body">
                <h3 class="card-title">Users</h3>
                <p class="card-text">Latest added</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
    </div>
@endsection
