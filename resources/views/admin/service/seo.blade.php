@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mt-4">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 mb-4 text-gray-800">Services</h1>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $record->name }}</h6>
        </div>
        <div class="card-body">
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

            @if($record)
            <form action="{{ route('admin.serviceSeoUpdate', $record->id) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">H1 Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $record->name }}" required>
                </div>

                <div class="mb-4">
                    <label for="meta_title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $record->meta_title }}" required>
                </div>

                <div class="mb-4">
                    <label for="meta_keyword" class="form-label">Keyword</label>
                    <textarea class="form-control" id="meta_keyword" name="meta_keyword" >{{ $record->meta_keyword }}</textarea>
                </div>
                
                <div class="mb-4">
                    <label for="meta_description" class="form-label">Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" >{{ $record->meta_description }}</textarea>
                </div>

                <div class="mb-6">
                    <button type="submit" class="btn btn-primary mt-6">Save</button>
                    <a class="btn btn-outline-primary ml-4 " href="{{ route('admin.service') }}">Cancel</a>
                </div>                
            </form>
            @endif
        </div>
    </div>

</div>
<!-- /.container-fluid -->  

@endsection
    