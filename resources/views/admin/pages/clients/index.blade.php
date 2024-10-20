@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Pages</h1>

    <div class="pb-3 ">
        <div>
            <form action="{{route('admin.storeClient')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="mb-4">
                    <label for="logo" class="form-label">Select Multiple Client Logo's</label>
                    <input type="file" class="form-control" id="logo" name="logos[]" multiple >
                    {{-- <input type="text" class="form-control mt-3" id="alttext" name="alttext" placeholder="Alt text" > --}}
                </div>

                <div class="mb-6 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mt-6 px-5">Upload</button>
                </div>  
            </form>
        </div>
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
            <h6 class="m-0 font-weight-bold text-primary">Clients Logo</h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered page_data_table" id="page_data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Logos</th>
                            <th>Alt Text</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($clients)
                        @foreach($clients as $row)
                            <tr class="">
                                <td>
                                    {{-- {{$row->logo}} --}}
                                    <img src="{{url('/storage/uploads/'.$row->logo)}}" alt="Client-Logo" width="50">
                                </td>
                                <form action="{{route('admin.storeClient.update' , $row->id)}}" method="POST" >
                                    @csrf
                                    @method('PUT')
                                <td>
                                    <input type="text" class="form-control " id="alt" name="alt" value="{{$row->alttext}}" >
                                </td>
                                <td class="d-flex">
                                    <button type="submit" class="btn">
                                        <i class="fas fa-save"></i>

                                    </button>
                                    </form>
                                {{-- DELETE CLIENT --}}
                                    <form action="{{route('admin.destoryClient' , $row->id)}}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn ">
                                            <i class="fas fa-fw fa-trash-alt"></i>

                                        </button>
                                    </form>
                                        {{-- <a href="{{ route('admin.serviceSeo', $row->id) }}" >
                                            <i class="fas fa-fw fa-trash-alt"></i>
                                        </a>  --}}
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
    