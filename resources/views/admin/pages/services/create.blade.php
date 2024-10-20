@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Create Service</h1>

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
        
           
            {{-- Card Section Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#collapse1">
                            <h6 class="m-0 font-weight-bold text-primary" >Card Section</h6>
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
                                    <label for="card_Img" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="card_Img" name="card_Img"  >
                                    <input type="text" class="form-control" id="card_Img_alt" name="card_Img_alt" placeholder="Alt Text"  >
                                </div>

                                <div class="mb-4">
                                    <label for="category" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="category" name="category"  >

                                    {{-- <textarea class="form-control" id="texteditor" name="content" ></textarea> --}}
                                </div>
                                <div class="mb-4">
                                    <label for="card_title" class="form-label">Content</label>
                                    <textarea class="form-control" id="texteditor" name="content" ></textarea>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            {{-- HeroSection Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#HeroSection">
                            <h6 class="m-0 font-weight-bold text-primary" >Hero Section</h6>
                        </div>
                    </div>
                    <div id="HeroSection" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                                <div class="mb-4">
                                    <label for="Herotitle" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="Herotitle" name="Herotitle"  >
                                </div>

                                <div class="mb-4">
                                    <label for="ContentHero" class="form-label">Content</label>
                                    <textarea class="form-control" id="Content" name="ContentHero" ></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="btn_one" class="form-label">Button First Value</label>
                                    {{-- <textarea class="form-control" id="meta_description" name="meta_description" ></textarea> --}}
                                    <input type="text" class="form-control" id="btn_one" name="btn_one"  >

                                </div>
                                <div class="mb-4">
                                    <label for="btn_two" class="form-label">Button First Value</label>
                                    {{-- <textarea class="form-control" id="meta_description" name="meta_description" ></textarea> --}}
                                    <input type="text" class="form-control" id="btn_two" name="btn_two"  >

                                </div>

                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="Rimg" class="form-label">Right Image</label>
                                    <input type="file" class="form-control" id="RImg" name="Rimg"  >
                                    <input type="text" class="form-control mt-3" id="Rimg_alttext" name="Rimg_alttext"  >

                                </div>
                                {{-- <div class="mb-4">
                                    <label for="Rimg_alttext" class="form-label">Image Alt Value</label>
                                    <input type="text" class="form-control" id="Rimg_alttext" name="Rimg_alttext"  >
                                </div> --}}
                                {{-- End image input area  --}}


                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="G_img" class="form-label">Google Image</label>
                                    <input type="file" class="form-control" id="G_img" name="G_img"  >
                                    <input type="text" class="form-control mt-3" id="G_img_alttext" name="G_img_alttext" placeholder="Alt Value"  >

                                </div>
                               
                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="T_img" class="form-label">Trust Pilot Image</label>
                                    <input type="file" class="form-control" id="T_img" name="T_img"  >
                                    <input type="text" class="form-control mt-3" id="T_img_alttext" name="T_img_alttext" placeholder="Alt Value"  >

                                </div>
                               
                        
                        </div>
                    </div>
                </div>
                </div>
            </div>

            {{-- Overview Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#Overview">
                            <h6 class="m-0 font-weight-bold text-primary" >Overview Section</h6>
                        </div>
                    </div>
                    <div id="Overview" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                                <div class="mb-4">
                                    <label for="subtitle" class="form-label">Sub Title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle"  >
                                </div>
                                <div class="mb-4">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  >
                                </div>

                                <div class="mb-4">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="texteditor2" name="content" ></textarea>
                                </div>

                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="Rimg" class="form-label">Right Image</label>
                                    <input type="file" class="form-control" id="Rimg" name="Rimg"  >
                                    <input type="text" class="form-control mt-3" id="Rimg_alttext" name="Rimg_alttext"  >
                                    <span> OR </span>
                                    <label for="RYlink" class="form-label">Youtube Link</label>
                                    <input type="text" class="form-control mt-3" id="RYlink" name="RYlink"  >

                                </div>
                                {{-- <div class="mb-4">
                                    <label for="Rimg_alttext" class="form-label">Image Alt Value</label>
                                    <input type="text" class="form-control" id="Rimg_alttext" name="Rimg_alttext"  >
                                </div> --}}
                                {{-- End image input area  --}}


                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="G_img" class="form-label">Google Image</label>
                                    <input type="file" class="form-control" id="G_img" name="G_img"  >
                                    <input type="text" class="form-control mt-3" id="G_img_alttext" name="G_img_alttext" placeholder="Alt Value"  >

                                </div>
                               
                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="T_img" class="form-label">Trust Pilot Image</label>
                                    <input type="file" class="form-control" id="T_img" name="T_img"  >
                                    <input type="text" class="form-control mt-3" id="T_img_alttext" name="T_img_alttext" placeholder="Alt Value"  >

                                </div>
                               
                        
                        </div>
                    </div>
                </div>
                </div>
            </div>


            {{-- Faq's Section Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#faqs">
                            <h6 class="m-0 font-weight-bold text-primary" >Faq's Section</h6>
                        </div>
                    </div>
                    <div id="faqs" class="panel-collapse ">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="faq_sub" class="form-label">Sub Title</label>
                                <input type="text" class="form-control" id="faq_sub" name="faq_sub"  >
                            </div>
                            <div class="mb-4">
                                <label for="faq_title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="faq_title" name="faq_title"  >
                            </div>
                            <div class="mb-4">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"  >
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            {{-- Plan Section Panel
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#plan">
                            <h6 class="m-0 font-weight-bold text-primary" >Plan Section</h6>
                        </div>
                    </div>
                    <div id="plan" class="panel-collapse ">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="faq_sub" class="form-label">Sub Title</label>
                                <input type="text" class="form-control" id="faq_sub" name="faq_sub"  >
                            </div>
                            <div class="mb-4">
                                <label for="Plan_title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="Plan_title" name="Plan_title"  >
                            </div>
                            <div class="mb-4">
                                <label for="Plan_desc" class="form-label">Plan Desc</label>
                                <input type="text" class="form-control" id="Plan_desc" name="Plan_desc"  >
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div> --}}
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
    