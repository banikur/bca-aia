@extends('template.main')
@section('css')
<style>
    .nk-page-background-top:after {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-color: rgba(58, 11, 177, 0.523);
    }
    .nk-page-background-bottom:after {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-color: rgba(58, 11, 177, 0.523);
    }
</style>
@endsection
@section('content')
@include('template.plugins.slideshow')

<div class="nk-gap-2"></div>
<h3 class="nk-decorated-h-2"><span><span class="text-main-2">Our Sponsor</span> </span>
</h3>
@include('template.plugins.category')
<div class="nk-gap"></div>

@endsection
@section('javascript')
@endsection