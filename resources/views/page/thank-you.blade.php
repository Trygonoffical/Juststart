@extends('layouts.app')

@section('content')

<section class="wrapper bg-light">
  <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
    <div class="row">
      <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
        <h1 class="mb-3 display-5 font-bolder">Thank You</h1>
        <p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">Thank you for contacting us, we will get back to you as soon as possible.</p>
        <a href="{{route('home')}}" class="btn btn-primary rounded-pill">Go to Homepage</a>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>


@endsection