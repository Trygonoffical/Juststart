@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Create Home Page</h1>

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
                           
                            <form action="{{route('admin.pagesUpdate.homepage')}}" method="POST" enctype="multipart/form-data">
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
        
           
            {{-- banner Panel --}}
            <div class="panel-group shadow mb-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card ">
                        <div class="card-header py-3" role="button"   data-toggle="collapse" href="#collapse1">
                            <h6 class="m-0 font-weight-bold text-primary" >Hero Section</h6>
                        </div>
                    </div>
                    <div id="collapse1" class="panel-collapse ">
                        <!-- Card Body -->

                        <div class="card-body">
                            <!-- Display errors if there are any -->
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                            {{-- <form action="" method="POST" enctype="multipart/form-data">
                                @csrf --}}
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
                                {{-- <div class="mb-4">
                                    <label for="G_img_alttext" class="form-label">Google Image Alt Value</label>
                                    <input type="text" class="form-control" id="G_img_alttext" name="G_img_alttext"  >
                                </div> --}}
                                {{-- End image input area  --}}

                                {{-- Image Input area  --}}
                                <div class="mb-4">
                                    <label for="T_img" class="form-label">Trust Pilot Image</label>
                                    <input type="file" class="form-control" id="T_img" name="T_img"  >
                                    <input type="text" class="form-control mt-3" id="T_img_alttext" name="T_img_alttext" placeholder="Alt Value"  >

                                </div>
                                {{-- <div class="mb-4">
                                    <label for="T_img_alttext" class="form-label">Trust Pilot Image Alt Value</label>
                                    <input type="text" class="form-control" id="T_img_alttext" name="T_img_alttext"  >
                                </div> --}}
                                {{-- End image input area  --}}
                                
                                
                                
                                {{-- <div class="mb-6 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mt-6">Save</button>
                                </div>                
                            </form> --}}
                        
                        </div>
                    </div>
                </div>
                </div>
            </div>
        
            {{-- <form action="{{route('admin.pagesUpdate.homepage')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') --}}
                {{-- Client  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Client">
                                <h6 class="m-0 font-weight-bold text-primary" >Client Logos Area</h6>
                            </div>
                        </div>
                        <div id="Client" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                                
                            
                                    <div class="mb-4">
                                        <label for="client_sub" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="client_sub" name="client_sub"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="client_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="client_title" name="client_title"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="client_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="client_content" name="client_content" ></textarea>
                                    </div>

                            
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                {{-- Service  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Service">
                                <h6 class="m-0 font-weight-bold text-primary" >Service Area</h6>
                            </div>
                        </div>
                        <div id="Service" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                            

                                    <div class="mb-4">
                                        <label for="Serv_sub" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="Serv_sub" name="Serv_sub"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="Serv_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="Serv_title" name="Serv_title"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="Serv_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="Serv_content" name="Serv_content" ></textarea>
                                    </div>             
                            
                            
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            
                {{-- Testimonial  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Testimonial">
                                <h6 class="m-0 font-weight-bold text-primary" >Testimonial Area</h6>
                            </div>
                        </div>
                        <div id="Testimonial" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                            

                                    <div class="mb-4">
                                        <label for="test_sub" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="test_sub" name="test_sub"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="test_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="test_title" name="test_title"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="test_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="test_content" name="test_content" ></textarea>
                                    </div>             
                            
                            
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


                {{-- whatwedo  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#whatwedo">
                                <h6 class="m-0 font-weight-bold text-primary" >What We Do Area</h6>
                            </div>
                        </div>
                        <div id="whatwedo" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                            

                                    <div class="mb-4">
                                        <label for="WhatDO_subtitle" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="WhatDO_subtitle" name="WhatDO_subtitle"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="WhatDo_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="WhatDo_title" name="WhatDo_title"  >
                                    </div>

                                   <hr>
                                   <h5 class="text-center">Point One</h5 >
                                    {{-- Points Area  --}}
                                    <div class="mb-4">
                                        <label for="WDO_bOne_icon" class="form-label">Icon</label>
                                        <input type="file" class="form-control" id="WDO_bOne_icon" name="WDO_bOne_icon"  >
                                        <input type="text" class="form-control mt-2" id="WDO_bOne_icon_alttext" name="WDO_bOne_icon_alttext" placeholder="Alt Text"  >

                                    </div>

                                    <div class="mb-4">
                                        <label for="WDo_bone_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="WDo_bone_title" name="WDo_bone_title"  >
                                    </div>
                                    <div class="mb-4">
                                        <label for="WDo_bone_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="WDo_bone_content" name="WDo_bone_content" ></textarea>
                                    </div>
                                    {{-- end Point Area  --}}

                                    <hr>
                                   <h5 class="text-center">Point Two</h5 >
                                    {{-- Points Area  --}}
                                    <div class="mb-4">
                                        <label for="WDo_bTwo_icon" class="form-label">Icon</label>
                                        <input type="file" class="form-control" id="WDo_bTwo_icon" name="WDo_bTwo_icon"  >
                                        <input type="text" class="form-control mt-2" id="WDo_bTwo_icon_alttext" name="WDo_bTwo_icon_alttext" placeholder="Alt Text"  >

                                    </div>

                                    <div class="mb-4">
                                        <label for="WDo_bTwo_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="WDo_bTwo_title" name="WDo_bTwo_title"  >
                                    </div>
                                    <div class="mb-4">
                                        <label for="WDo_bTwo_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="WDo_bTwo_content" name="WDo_bTwo_content" ></textarea>
                                    </div>
                                    {{-- end Point Area  --}}

                                    <hr>
                                   <h5 class="text-center">Point Three</h5 >
                                    {{-- Points Area  --}}
                                    <div class="mb-4">
                                        <label for="WDo_bThree_Icon" class="form-label">Icon</label>
                                        <input type="file" class="form-control" id="WDo_bThree_Icon" name="WDo_bThree_Icon"  >
                                        <input type="text" class="form-control mt-2" id="WDo_bThree_Icon_alttext" name="WDo_bThree_Icon_alttext" placeholder="Alt Text"  >

                                    </div>

                                    <div class="mb-4">
                                        <label for="WDo_bThree_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="WDo_bThree_title" name="WDo_bThree_title"  >
                                    </div>
                                    <div class="mb-4">
                                        <label for="WDo_bThree_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="WDo_bThree_content" name="WDo_bThree_content" ></textarea>
                                    </div>
                                    {{-- end Point Area  --}}

                                    <hr>
                                   <h5 class="text-center">Point Four</h5 >
                                    {{-- Points Area  --}}
                                    <div class="mb-4">
                                        <label for="Wdo_bFour_icon" class="form-label">Icon</label>
                                        <input type="file" class="form-control" id="Wdo_bFour_icon" name="Wdo_bFour_icon"  >
                                        <input type="text" class="form-control mt-2" id="Wdo_bFour_icon_alttext" name="Wdo_bFour_icon_alttext" placeholder="Alt Text"  >

                                    </div>

                                    <div class="mb-4">
                                        <label for="WDo_bFour_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="WDo_bFour_title" name="WDo_bFour_title"  >
                                    </div>
                                    <div class="mb-4">
                                        <label for="WDo_bFour_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="WDo_bFour_content" name="WDo_bFour_content" ></textarea>
                                    </div>
                                    {{-- end Point Area  --}}
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                {{-- Trusted  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card ">
                            <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Trusted">
                                <h6 class="m-0 font-weight-bold text-primary" >Trusted Area</h6>
                            </div>
                        </div>
                        <div id="Trusted" class="panel-collapse ">
                            <!-- Card Body -->

                            <div class="card-body">
                            

                                    <div class="mb-4">
                                        <label for="trusted_sub_title" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="trusted_sub_title" name="trusted_sub_title"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="trusted_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="trusted_title" name="trusted_title"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="trusted_content" class="form-label">Content</label>
                                        <textarea class="form-control" id="trusted_content" name="trusted_content" ></textarea>
                                    </div>             
                            
                                    {{-- Points Area  --}}

                                    {{-- First  --}}
                                    <div class="mb-4">
                                        <label for="pone" class="form-label">Point First</label>
                                        <input type="text" class="form-control" id="pone" name="pone"  >
                                    </div>

                                    {{-- Secont  --}}
                                    <div class="mb-4">
                                        <label for="ptwo" class="form-label">Point Two</label>
                                        <input type="text" class="form-control" id="ptwo" name="ptwo"  >
                                    </div>
                                    
                                    {{-- Third  --}}
                                    <div class="mb-4">
                                        <label for="pthree" class="form-label">Point Three</label>
                                        <input type="text" class="form-control" id="pthree" name="pthree"  >
                                    </div>

                                    {{-- Fourth --}}
                                    <div class="mb-4">
                                        <label for="pfour" class="form-label">Point Four</label>
                                        <input type="text" class="form-control" id="pfour" name="pfour"  >
                                    </div>

                                    {{-- End Points Area  --}}
                                    
                                    <div class="mb-4">
                                        <label for="btn" class="form-label">Button URL</label>
                                        <input type="text" class="form-control" id="btn" name="btn"  >
                                    </div>

                                    <div class="mb-4">
                                        <label for="trusted_img" class="form-label">Background Image </label>
                                        <input type="file" class="form-control" id="img" name="trusted_img"  >
                                        <input type="text" class="form-control mt-3" id="trusted_img_alt" name="trusted_img_alt" placeholder="ALt Tag"   >

                                    </div>
                                    {{-- <div class="mb-4">
                                        <label for="img_alt" class="form-label">Background Image</label>
                                        <input type="color" class="form-control" id="img_alt" name="img_alt"  >
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                {{-- 2 USP  Panel Area --}}
                <div class="panel-group shadow mb-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card ">
                                <div class="card-header py-3" role="button"  data-toggle="collapse" href="#Trusted">
                                    <h6 class="m-0 font-weight-bold text-primary" > USP Area's</h6>
                                </div>
                            </div>
                            <div id="Trusted" class="panel-collapse ">
                                <!-- Card Body -->

                                <div class="card-body">
                                    <h5 class="text-center">Point One</h5>

                                        <div class="mb-4">
                                            <label for="USP_sub_title" class="form-label">Sub Title</label>
                                            <input type="text" class="form-control" id="USP_sub_title" name="USP_sub_title"  >
                                        </div>

                                        <div class="mb-4">
                                            <label for="USP_title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="USP_title" name="USP_title"  >
                                        </div>

                                        <div class="mb-4">
                                            <label for="USP_content" class="form-label">Content</label>
                                            <textarea class="form-control" id="USP_content" name="USP_content" ></textarea>
                                        </div>             
                                        
                                        <div class="mb-4">
                                            <label for="USP_btn" class="form-label">Button URL</label>
                                            <input type="text" class="form-control" id="USP_btn" name="USP_btn"  >
                                        </div>

                                        <div class="mb-4">
                                            <label for="USP_img" class="form-label">Image </label>
                                            <input type="file" class="form-control" id="USP_img" name="USP_img"  >
                                            <input type="text" class="form-control mt-3" id="USP_img_alt" name="USP_img_alt" placeholder="ALt Tag"   >

                                        </div>
                                        <div class="mb-4">
                                            <label for="USP_bg_color" class="form-label">Backgound Color</label>
                                            <input type="color" class="form-control d-inline" id="USP_bg_color" name="USP_bg_color" style="width:50px;" >
                                        </div>

                                        <hr>

                                        <h5 class="text-center">Point Two</h5>

                                        <div class="mb-4">
                                            <label for="USP_sub_title2" class="form-label">Sub Title 2</label>
                                            <input type="text" class="form-control" id="USP_sub_title2" name="USP_sub_title2"  >
                                        </div>

                                        <div class="mb-4">
                                            <label for="USP_title2" class="form-label">Title 2</label>
                                            <input type="text" class="form-control" id="USP_title2" name="USP_title2"  >
                                        </div>

                                        <div class="mb-4">
                                            <label for="USP_content2" class="form-label">Content 2</label>
                                            <textarea class="form-control" id="USP_content2" name="USP_content2" ></textarea>
                                        </div>             
                                        
                                        <div class="mb-4">
                                            <label for="USP_btn2" class="form-label">Button URL 2</label>
                                            <input type="text" class="form-control" id="USP_btn2" name="btn2"  >
                                        </div>

                                        <div class="mb-4">
                                            <label for="USP_img" class="form-label">Image 2</label>
                                            <input type="file" class="form-control" id="USP_img2" name="USP_img2"  >
                                            <input type="text" class="form-control mt-3" id="USP_img_alt2" name="USP_img_alt2" placeholder="ALt Tag"   >

                                        </div>
                                        <div class="mb-4">
                                            <label for="USP_bg_color2" class="form-label">Backgound Color</label>
                                            <input type="color" class="form-control d-inline" id="USP_bg_color2" name="USP_bg_color2" style="width:50px;" >
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
                                <button type="submit" class="btn btn-primary mt-6 px-5">Save</button>
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
    