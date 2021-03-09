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
                        <span style="color:white">History Reward Anda : {{ number_format($count_point,0,',','.') }} Point</span>
                        <br/>
                        <span style="color:white">Posisi Klasemen : {{$your_rank}} </span>
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
                <div class="nk-gap"></div>
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
                            <div class="col-md-12">
                                <table class="table" style="width: 100%;color:white;">
                                    <tr>
                                        <th scope="row">No.</th>
                                        <th>Nama User</th>
                                        <th>Total Point</th>
                                    </tr>
                                    <?php $no = 1; ?>
                                    @foreach($data_klasmen as $dt)
                                    <tr>
                                        <td scope="row">{{$no++}}</td>
                                        <td>{{$dt->name}}</td>
                                        <td>{{$dt->sum}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('javascript')
@endsection