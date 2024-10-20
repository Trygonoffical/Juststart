@extends('layouts.app')

@section('content')

{{-- 
@include('pageComponent.homeBanner') --}}


@include('component.client-logo')

@include('component.service-list')

@include('component.steps')

@include('component.success-formula')

@include('component.trusted-by')

@include('component.testimonial')

@endsection