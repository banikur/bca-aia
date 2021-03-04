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
<div class="nk-main">
    <div class="nk-gap"></div>
    <div class="">
        @yield('content')
        <div class="row">
            <div class="col-md-8">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{{ __('Selamat Datang') }}</span></h4>
                    <div class="nk-widget-content">
                        @include('template.plugins.gallery')
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Total</span> Reward</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-widget-match">
                            879 Points
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nk-gap-2"></div>
<div class="nk-page-background-fixed" style="background-image: url('assets/images/logo/japan1.jpg') ;"></div>
@endsection
@section('javascript')
@endsection