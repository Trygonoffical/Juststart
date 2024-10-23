@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Edit Service</h1>

    <div class="row">

            <!-- Display errors if there are any -->
            @if ($errors->any())
            <div class="col-12">
                <div class="alert alert-danger w-100">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
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

                            <form action="{{route('admin.service.updateService' , $serv->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-4">
                                    <label for="meta_title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"  value="{{$serv->metatag->meta_title}}">

                                </div>

                                <div class="mb-4">
                                    <label for="meta_keyword" class="form-label">Keyword</label>
                                    <textarea class="form-control" id="meta_keyword" name="meta_keyword" >{{$serv->metatag->meta_keyword}}</textarea>

                                </div>

                                <div class="mb-4">
                                    <label for="meta_description" class="form-label">Description</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" >{{$serv->metatag->meta_description}}</textarea>

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
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control " >
                                    <option selected>{{$serv->status}} </option>
                                    @if ($serv->status == 'Active')
                                        <option value="Disable">Disable</option>
                                    @else
                                        <option value="Active">Active</option>
                                    @endif
                                </select>
                                {{-- <textarea class="form-control" id="texteditor" name="content" ></textarea> --}}
                            </div>
                                <div class="mb-4">
                                    <label for="Menuname" class="form-label">Menu Name</label>
                                    <input type="text" class="form-control" id="Menuname" name="Menuname"  value="{{$serv->Menuname}}">
                                </div>
                                <div class="mb-4">
                                    <label for="card_title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="card_title" name="card_title"  value="{{$serv->card_title}}">
                                </div>
                                <div class="mb-4">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{$serv->slug}}" >
                                </div>
                                <div class="mb-4">
                                    <label for="card_Img" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="card_Img" name="card_Img"  >
                                    <input type="text" class="form-control mt-3" id="card_Img_alt" name="card_Img_alt" placeholder="Alt Text" value="{{$serv->card_tag}}" >
                                </div>

                                <div class="mb-4">
                                    <label for="category" class="form-label">Category</label>
                                    {{-- <input type="text" class="form-control" id="category" name="category"  > --}}
                                    <select name="category" id="category" class="form-control "  required>
                                        <option selected>{{$serv->category}}</option>
                                        <option value="Registrations">Registrations</option>
                                        <option value="License">License</option>
                                        <option value="Protect">Protect</option>
                                        <option value="Manage">Manage</option>
                                        <option value="Accounting">Accounting & Taxation</option>
                                    </select>
                                    {{-- <textarea class="form-control" id="texteditor" name="content" ></textarea> --}}
                                </div>
                                <div class="mb-4">
                                    <label for="cart_content" class="form-label">Content</label>
                                    <textarea class="form-control" id="texteditor" name="cart_content" >{{$serv->cart_content}}</textarea>
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
                                    <input type="text" class="form-control" id="Herotitle" name="Herotitle"  value="{{$serv->herosection->title}}">
                                </div>

                                <div class="mb-4">
                                    <label for="ContentHero" class="form-label">Content</label>
                                    <textarea class="form-control" id="texteditor2" name="ContentHero" >{!! $serv->herosection->des !!}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="btn_one" class="form-label">Button First Value</label>
                                    {{-- <textarea class="form-control" id="meta_description" name="meta_description" ></textarea> --}}
                                    <input type="text" class="form-control" id="btn_one" name="btn_one" value="{{$serv->herosection->btn_one}}" >

                                </div>
                                <hr>
                                <div class="mb-4">

                                    <label><input name="RForm" type="checkbox" value="1"
                                    @if ($serv->herosection->RForm == 1)
                                        checked
                                    @endif
                                    class="mr-3">Inbuild Form </label>
                                    <br><span> -or-</span> <br>

                                    <label for="btn_two" class="form-label">CRM Code</label>
                                    <textarea class="form-control" id="btn_two" name="btn_two" >{!! $serv->herosection->btn_two !!}</textarea>
                                    <br><span> -or-</span> <br>
                                    <label for="heroRimg" class="form-label">Right Image</label>
                                    <input type="file" class="form-control" id="heroRimg" name="heroRimg"  >
                                    <input type="text" class="form-control mt-3" id="heroRimg_alttext" name="heroRimg_alttext" value="{{$serv->herosection->Rimg_alttext }}" >
                                </div>
                                <hr>

                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="G_img" class="form-label">Google Image</label>
                                    <input type="file" class="form-control" id="G_img" name="G_img"  >
                                    <input type="text" class="form-control mt-3" id="G_img_alttext" name="G_img_alttext" placeholder="Alt Value" value="{{$serv->herosection->G_img_alttext }}" >
                                </div>
                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="T_img" class="form-label">Trust Pilot Image</label>
                                    <input type="file" class="form-control" id="T_img" name="T_img"  >
                                    <input type="text" class="form-control mt-3" id="T_img_alttext" name="T_img_alttext" placeholder="Alt Value" value="{{$serv->herosection->T_img_alttext }}" >
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
                                    <label for="oversubtitle" class="form-label">Sub Title</label>
                                    <input type="text" class="form-control" id="oversubtitle" name="oversubtitle"  value="{{$serv->overviews->subtitle }}">
                                </div>
                                <div class="mb-4">
                                    <label for="overtitle" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="overtitle" name="overtitle" value="{{$serv->overviews->title }}">
                                </div>

                                <div class="mb-4">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="texteditor3" name="content" >{!! $serv->overviews->content !!}</textarea>
                                </div>

                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="Rimg" class="form-label">Right Image</label>
                                    <input type="file" class="form-control" id="Rimg" name="Rimg"  >
                                    <input type="text" class="form-control mt-3" id="Rimg_alttext" name="Rimg_alttext" value="{{$serv->overviews->Rimg_alttext }}">
                                    <br><span> OR </span><br>
                                    <label for="RYlink" class="form-label">Youtube Link</label>
                                    <input type="text" class="form-control mt-3" id="RYlink" name="RYlink" value="{{$serv->overviews->RYlink }}" >

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
                                <input type="text" class="form-control" id="faq_sub" name="faq_sub" value="{{$serv->faq_sub }}" >
                            </div>
                            <div class="mb-4">
                                <label for="faq_title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="faq_title" name="faq_title"  value="{{$serv->faq_title }}">
                            </div>
                            {{-- <div class="mb-4">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"  >
                            </div> --}}
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
            </form>
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"  data-toggle="collapse" href="#NESECTION">
                            <h6 class="m-0 font-weight-bold text-primary" >New Section</h6>
                        </div>
                    </div>
                    <div id="NESECTION" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                            <div class="mb-4">
                                <label for="Section" class="form-label">Section</label>
                                {{-- <input type="text" class="form-control" id="category" name="category"  > --}}
                                <select name="Section" id="Section" class="form-control " >
                                    <option selected>New Section</option>
                                    <option value="PLAN">PLAN</option>
                                    <option value="FEATURES">FEATURES</option>
                                    <option value="CHECKLIST">CHECKLIST</option>
                                    <option value="WHY">WHY</option>
                                    <option value="DOCUMENTS">DOCUMENTS REQUIRED</option>
                                </select>
                                {{-- <textarea class="form-control" id="texteditor" name="content" ></textarea> --}}
                            </div>
                            <div class="mb-6 d-flex justify-content-start">

                                <button type="submit" class="btn btn-primary mt-6 px-5">Create</button>
                                {{-- <a class="btn btn-outline-primary ml-4 " href="">Cancel</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
