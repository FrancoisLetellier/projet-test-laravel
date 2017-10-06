@extends('admin.template')
@extends('layout.navbar')
@section('content')
    <div class="result">
        <h1 class="text-center">Search result</h1>
        <h3 class="text-center search-title">Search games</h3>
        <div class="row justify-content-md-center search-bar">
            <input class="form-control col-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 ml-4" type="submit">Search</button>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Platforms</th>
                <th>Year</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">
                    <button type="button" data-toggle="modal" data-target="#myModal">
                        <img class="d-flex align-self-center mr-3" src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" alt="Game placeholder image" width = "50px"/>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Game name</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div></th>
                <td>Zelda</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">
                    <button type="button" data-toggle="modal" data-target="#myModal">
                        <img class="d-flex align-self-center mr-3" src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" alt="Game placeholder image" width = "50px"/>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Game name</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div></th>
                <td>Mario</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">
                    <button type="button" data-toggle="modal" data-target="#myModal">
                        <img class="d-flex align-self-center mr-3" src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" alt="Game placeholder image" width = "50px"/>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Game name</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('images/The_Legend_of_Zelda_Breath_of_the_Wild.jpg') }}" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div></th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-12">
                <a href=""><i class="fa fa-ellipsis-h fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-12">
                <a href=""><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-12">
                <a href="{!! url('/') !!}"><i class="fa fa-home fa-3x" aria-hidden="true"></i></a>
            </div>
        </div>
</div>
@endsection