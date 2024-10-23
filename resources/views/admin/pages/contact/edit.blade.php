@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Create Contact Page</h1>

    <div class="row">
        <div class="col-12">
            <!-- Display errors if there are any -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <div class="col-md-9">
            {{-- Meta Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button" data-toggle="collapse" href="#metatags">
                            <h6 class="m-0 font-weight-bold text-primary" >Meta Tags</h6>
                        </div>
                    </div>
                    <div id="metatags" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">

                            <form action="{{route('admin.contact.update' , $cont->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-4">
                                    <label for="meta_title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{$cont->metatag->meta_title}}" >

                                </div>

                                <div class="mb-4">
                                    <label for="meta_keyword" class="form-label">Keyword</label>
                                    <textarea class="form-control" id="meta_keyword" name="meta_keyword" >{{$cont->metatag->meta_keyword}}</textarea>

                                </div>

                                <div class="mb-4">
                                    <label for="meta_description" class="form-label">Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" >{{$cont->metatag->meta_description}}</textarea>

                                </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>


            {{-- Contact Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#collapse1">
                            <h6 class="m-0 font-weight-bold text-primary" >Contact Section</h6>
                        </div>
                    </div>
                    <div id="collapse1" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$cont->email}}" >
                                </div>

                                <div class="mb-4">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" >{{$cont->address}}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="phoneno" class="form-label">Phone No.</label>
                                    <input type="number" class="form-control mt-3" id="phoneno" name="phoneno" value="{{$cont->phoneno}}">
                                </div>
                                <div class="mb-4">
                                    <label for="whatappno" class="form-label">Whatsapp No.</label>
                                    <input type="number" class="form-control mt-3" id="whatappno" name="whatappno" value="{{$cont->whatappno}}" >
                                </div>
                                <div class="mb-4">
                                    <label for="gmap" class="form-label">G Map</label>
                                    <input type="text" class="form-control" id="gmap" name="gmap"  value="{{$cont->gmap}}" >
                                </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>

                {{-- Social Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Client">
                                <h6 class="m-0 font-weight-bold text-primary" >Social Media Area</h6>
                            </div>
                        </div>
                        <div id="Client" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                                    <div class="mb-4">
                                        <label for="fb" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="fb" name="fb" value="{{$cont->fb}}" >
                                    </div>
                                    <div class="mb-4">
                                        <label for="twitter" class="form-label">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter"  value="{{$cont->twitter}}" >
                                    </div>
                                    <div class="mb-4">
                                        <label for="insta" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="insta" name="insta"  value="{{$cont->insta}}" >
                                    </div>
                                    <div class="mb-4">
                                        <label for="linkdin" class="form-label">linkdin</label>
                                        <input type="text" class="form-control" id="linkdin" name="linkdin"  value="{{$cont->linkdin}}" >
                                    </div>
                                    <div class="mb-4">
                                        <label for="youtube" class="form-label">Youtube</label>
                                        <input type="text" class="form-control" id="youtube" name="youtube"  value="{{$cont->youtube}}" >
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            {{-- Client  Panel Area --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Action">
                            <h6 class="m-0 font-weight-bold text-primary" >Action</h6>
                        </div>
                    </div>
                    <div id="Action" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="mb-6 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-6 px-5">Update</button>
                                {{-- <a class="btn btn-outline-primary ml-4 " href="">Cancel</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </form>

    </div>

</div>
<!-- /.container-fluid -->

@endsection
