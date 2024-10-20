<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }} - Admin Panel</title>
    <script>
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>

    <!-- Custom fonts for this template-->
    <link href="{{asset('')}}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('')}}admin/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="{{asset('')}}admin/js/jquery.min.js"></script>
    <script src="{{asset('')}}admin/js/admin.js"></script>

    <link href="{{asset('')}}admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <style>
    span.field-error{
        color: red;
        font-size: 12px;
    }
    #cke_notifications_area_texteditor{
        display: none;
    }
    .cke_notifications_area{
        display: none;
    }
    </style>
</head>
@php
$bodyClass = '';
$bodyId = 'page-top';

$currentRouteName = request()->route()->getName();

if($currentRouteName == 'admin.login' ){
  $bodyClass = 'bg-gradient-primary';
  $bodyId = '';
}

@endphp

<body class="{{$bodyClass}}" id="{{$bodyId}}">

    @if (Auth::check())
        <div id="wrapper">
            @include('layouts.admin-sidebar')

            @yield('content')
        </div>
    @else 
        @yield('content')
    @endif

    

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('')}}admin/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('')}}admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('')}}admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('')}}admin/js/sb-admin-2.min.js"></script>

    <script src="{{asset('')}}admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>        
    <script>
        CKEDITOR.replace( 'texteditor' , {
                width: '100%',
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'texteditor2' , {
                width: '100%',
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'texteditor3' , {
                width: '100%',
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
        });
    </script>
    <script>
    function clearAllMessages(){
        setTimeout(function() {
            $('.alert-success').remove();
        }, 10000);
    }

    $(document).ready(function(){
        clearAllMessages();
    })
    </script>

</body>

</html>