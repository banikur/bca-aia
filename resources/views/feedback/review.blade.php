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
            <div class="col-md-8">
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span>{{ __('Daftar Review') }}</span></h4>
                    <div class="nk-widget-content">
                        <div class="col-md-12">
                            <table class="table" style="width: 100%;color:white;">
                                <tr>
                                    <th scope="row">No.</th>
                                    <th>Review</th> 
                                </tr>
                                <?php $no = 1; ?>
                                @foreach($testimoni as $dt)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td>{{$dt->testimonial}},<br/><span>Oleh User: {{$dt->name}} &nbsp;&nbsp;<i>Pada: {{$dt->created_at}}</i></span></td>
                                </tr>
                                @endforeach
                            </table>
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
                    <h4 class="nk-widget-title"><span><span class="text-main-1"></span>Tulis Review</span></h4>
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
    </div>
</div>
@endsection
@section('javascript')
@endsection