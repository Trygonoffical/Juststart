@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Pages</h1>

    <div class="pb-3 d-flex justify-content-end">
        <a href="{{route('admin.pages.create')}}" class="btn btn-outline-primary mr-2">Create Home</a>
        <a href="{{route('admin.about.create')}}" class="btn btn-outline-primary mr-2">Create About</a>
        <a href="{{route('admin.Contact.create')}}" class="btn btn-outline-primary mr-2">Create contact</a>
        <a href="{{route('admin.pages.createcustom')}}" class="btn btn-outline-primary ">Create Pages</a>
    </div>
    <!-- Success Message -->
    @if (session('success'))
    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div> --}}
    <div class="alert alert-success alert-dismissible my-4">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>  {{ session('success') }}
      </div>
@endif
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listing</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered page_data_table" id="page_data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($homepage)
                            <tr class="">
                                <td>Home Page</td>
                                <td>/</td>
                                <td >
                                    <a href="{{ route('admin.homepages.edit', $homepage->id) }}" >
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    {{-- <a href="{{ route('admin.serviceSeo', $homepage->id) }}" >
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </a> --}}
                                </td>
                            </tr>
                        @endif
                        @if($aboutpage)
                            <tr class="">
                                <td>About Page</td>
                                <td>/about</td>
                                <td>
                                    <a  href="{{ route('admin.AboutPage.edit', $aboutpage->id) }}">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endif
                        @if($contactpage)
                            <tr class="">
                                <td>Contactus Page</td>
                                <td>/contact</td>
                                <td>
                                    <a  href="{{ route('admin.ContactPage.edit', $contactpage->id) }}">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @if($Pages)
                        @foreach($Pages as $row)
                            <tr class="">
                                <td>{{$row->Menuname}}</td>
                                <td>{{$row->slug}}</td>
                                <td>
                                    <a  href="{{ route('admin.serviceSeo', $row->id) }}">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.serviceSeo', $row->id) }}" >
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </a>
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
