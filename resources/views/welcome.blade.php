@extends('template.main')
@section('css')
<style>
    .nk-page-background-fixed:after {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-color: rgba(8, 15, 174, 0.4);
    }
</style>
@endsection
@section('content')
@include('template.plugins.slideshow')

<div class="nk-gap"></div>
<!-- <h3 class="nk-decorated-h-2"><span><span class="text-main-7"></span> </span></h3> -->
@include('template.plugins.category')
<div class="nk-gap"></div>

@endsection
@section('javascript')
@endsection