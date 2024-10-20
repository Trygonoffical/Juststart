@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Meta Tags</h1>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listing</h6>
        </div>
        <div class="card-body">
            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered page_data_table" id="page_data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Page</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($metatags)
                        @foreach($metatags as $row)
                            {{-- @php
                            $row_id = $row->id;
                            $row_name = $row->name;
                            $row_slug = $row->slug;
                            @endphp --}}
                            <tr class="">
                                <td><span title="{{$row->meta_title}}">{{$row->meta_title}}</span></td>
                                <td>{{$meta_keyword}}</td>
                                <td>{{$meta_description}}</td>
                                <td> 
                                    @if ($row->home_id)
                                        Home Page
                                    @elseif ($row->page_id)
                                        {{$row->page->Menuname}}
                                    @elseif ($service_id)
                                        {{$row->service->Menuname}}
                                    @elseif ($blogs_id)
                                        {{$row->blog->menuName}}
                                    @elseif ($about_id)
                                        {{$row->page->Menuname}}
                                    @elseif ($contact_id)
                                        Contact Page
                                    @endif
                                   
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm row-more-info-button" href="{{ route('admin.serviceSeo', $row_id) }}">SEO</a>
                                </td>
                            </tr>
                            
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



<script>
$(document).ready(function() {
  $('#page_data_table').DataTable({
    "order": [[ 1, "asc" ]]
  });  
});



</script>    

@endsection
    