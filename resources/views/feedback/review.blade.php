@extends('template_dashboard.main')
@section('css')
<style>
    /* .nk-page-background-fixed:after {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-color: rgba(8, 15, 174, 0.4);
    } */
</style>
@endsection
@section('content')
<div class="nk-main">
    <div class="nk-gap"></div>
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{{ __('Selamat Datang') }}</span></h4>
                    <div class="nk-widget-content">
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{{ __('Feedback') }}</span></h4>
                    <div class="nk-widget-content">
                        <form action="{{ route('reviewpost') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea name="testimonial" class="form-control"></textarea>
                        </div>
                            <button type="submit" class="btn btn-info btn-block">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
@endsection