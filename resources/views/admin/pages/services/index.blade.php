@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Servcies Page</h1>

    <div class="pb-3 d-flex justify-content-end">
        
        <a href="{{route('admin.service.create')}}" class="btn btn-outline-primary ">Create Service</a>
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
            <h6 class="m-0 font-weight-bold text-primary">Services</h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered page_data_table" id="page_data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Service Name</th>
                            <th>Menu Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @if($services)
                        @foreach($services as $row)
                            <tr class="">
                                <td>{{$row->card_title}}</td>
                                <td>{{$row->Menuname}}</td>
                                <td>{{$row->slug}}</td>
                                <td>
                                    <a  href="{{ route('admin.serviceSeo', $row->id) }}">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.serviceSeo', $homepage->id) }}" >
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
    