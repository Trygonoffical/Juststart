@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Create Page</h1>

    <div class="row">
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
                           
                            <form action="{{route('admin.pagesUpdate.aboutpage')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="mb-4">
                                    <label for="meta_title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"  >

                                </div>

                                <div class="mb-4">
                                    <label for="meta_keyword" class="form-label">Keyword</label>
                                    <textarea class="form-control" id="meta_keyword" name="meta_keyword" ></textarea>

                                </div>
                                
                                <div class="mb-4">
                                    <label for="meta_description" class="form-label">Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" ></textarea>
                                
                                </div>
                        
                        </div>
                    </div>
                </div>
                </div>
            </div>
        
           
            {{-- About Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#collapse1">
                            <h6 class="m-0 font-weight-bold text-primary" > Section</h6>
                        </div>
                    </div>
                    <div id="collapse1" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                                <div class="mb-4">
                                    <label for="Menuname" class="form-label">Menu Name</label>
                                    <input type="text" class="form-control" id="Menuname" name="Menuname"  >
                                </div>
                                <div class="mb-4">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  >
                                </div>
                                <div class="mb-4">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"  >
                                </div>

                                <div class="mb-4">
                                    <label for="content" class="form-label">content</label>
                                    <textarea class="form-control" id="texteditor" name="content" ></textarea>
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
    