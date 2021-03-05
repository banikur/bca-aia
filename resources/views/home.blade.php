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
            @foreach($data_gambar as $post1)
            <div class="col-md-8">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{{ __('Selamat Datang') }}</span></h4>
                    <div class="nk-widget-content">
                        <div class="show_image">
                            <a href="" data-toggle="modal"><img src="{{ asset('images/'.$post1->image) }}"></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col-md-4">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Total</span> Reward</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-widget-match">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadImage">
                                Upload Image
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="uploadImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('posts.gambar') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info btn-block">Save</button>
                            </form>
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