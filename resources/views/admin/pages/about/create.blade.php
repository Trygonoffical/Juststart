@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Create About Page</h1>

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
                            <h6 class="m-0 font-weight-bold text-primary" >About Section</h6>
                        </div>
                    </div>
                    <div id="collapse1" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                                <div class="mb-4">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  >
                                </div>

                                <div class="mb-4">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="texteditor" name="content" ></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="topimg" class="form-label">Top Image</label>
                                    {{-- <textarea class="form-control" id="meta_description" name="meta_description" ></textarea> --}}
                                    <input type="file" class="form-control" id="topimg" name="topimg"  >
                                    <input type="text" class="form-control mt-3" id="centerImg" name="centerImg"  placeholder="Alt Text" >


                                </div>
                                <div class="mb-4">
                                    <label for="vision" class="form-label">Vision</label>
                                    <textarea class="form-control" id="vision" name="vision" ></textarea>
                                    <input type="text" class="form-control mt-3" id="visionbtn" name="visionbtn"  placeholder="Button URL" >
                                </div>
                                <div class="mb-4">
                                    <label for="mission" class="form-label">mission</label>
                                    <textarea class="form-control" id="mission" name="mission" ></textarea>
                                    <input type="text" class="form-control mt-3" id="missionbtn" name="missionbtn"  placeholder="Button URL" >
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        
                {{-- First Founder   Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Client">
                                <h6 class="m-0 font-weight-bold text-primary" >First Founder Area</h6>
                            </div>
                        </div>
                        <div id="Client" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                                
                            
                                    <div class="mb-4">
                                        <label for="FImg" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="FImg" name="FImg"  >
                                        <input type="text" class="form-control mt-3" id="FImg_alttext" name="FImg_alttext" placeholder="Alt Text"  >

                                    </div>
                                    <div class="mb-4">
                                        <label for="Fl_name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="Fl_name" name="Fl_name"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="Fdesignation" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="Fdesignation" name="Fdesignation"  >
                                    </div>
                                    <div class="mb-4">
                                        <label for="Flinkdin" class="form-label">linkdin</label>
                                        <input type="text" class="form-control" id="Flinkdin" name="Flinkdin"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="Fcontent" class="form-label">Content</label>
                                        <textarea class="form-control" id="Fcontent" name="Fcontent" ></textarea>
                                    </div>

                            
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                {{-- Second Founder  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Service">
                                <h6 class="m-0 font-weight-bold text-primary" >Second Founder Area</h6>
                            </div>
                        </div>
                        <div id="Service" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                            
                                <div class="mb-4">
                                    <label for="SImg" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="SImg" name="SImg"  >
                                    <input type="text" class="form-control mt-3" id="SImg_alttext" name="SImg_alttext" placeholder="Alt Text"  >

                                </div>
                                <div class="mb-4">
                                    <label for="Sl_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="Sl_name" name="Sl_name"  >
                                </div>

                                <div class="mb-4">
                                    <label for="Sdesignation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="Sdesignation" name="Sdesignation"  >
                                </div>
                                <div class="mb-4">
                                    <label for="Slinkdin" class="form-label">linkdin</label>
                                    <input type="text" class="form-control" id="Slinkdin" name="Slinkdin"  >
                                </div>

                                <div class="mb-4">
                                    <label for="Sdesignation" class="form-label">Content</label>
                                    <textarea class="form-control" id="Sdesignation" name="Sdesignation" ></textarea>
                                </div>         
                            
                            
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            
                {{-- Video  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Testimonial">
                                <h6 class="m-0 font-weight-bold text-primary" >Video Area</h6>
                            </div>
                        </div>
                        <div id="Testimonial" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                            

                                    <div class="mb-4">
                                        <label for="bgImg" class="form-label">BackGround Image</label>
                                        <input type="file" class="form-control" id="bgImg" name="bgImg"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="youtlink" class="form-label">Youtube Link</label>
                                        <input type="text" class="form-control" id="youtlink" name="youtlink"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="videocontent" class="form-label">Content</label>
                                        <textarea class="form-control" id="videocontent" name="videocontent" ></textarea>
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
    