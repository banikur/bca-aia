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
                        History Reward Anda : {{ $count_point }}
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{{ __('Gallery') }}</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-popup-gallery">
                            <div class="row vertical-gap">
                                @foreach($data_gambar as $data)
                                <div class="col-lg-4 col-md-6">
                                    <div class="nk-gallery-item-box">
                                        <a href="{{asset('/images/'.$data->image)}}" class="nk-gallery-item" data-size="1016x572">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="{{asset('/images/'.$data->image)}}" alt="{{$data->description}}">
                                        </a>
                                        <div class="nk-gallery-item-description">
                                            <h4>Called Let</h4>
                                            {{ $data->description}},<i>uploaded at {{$data->created_at}}</i>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Unggah</span> Gambar</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-widget-match">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary fadeIn" data-toggle="modal" data-target="#uploadImage">
                                Upload Image
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap"></div>
            <div class="col-md-4">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1"></span>Review</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-widget-match">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary fadeIn" data-toggle="modal" data-target="#uploadReview">
                                Input Review
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Klasemen</span> Point</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-widget-match">
                            {{-- {{ $data_klasmen }} --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Gambar-->
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

<!-- Modal Review-->
<div class="modal fade" id="uploadReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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

@endsection
@section('javascript')
@endsection