@extends('template_dashboard.main')
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
            <div class="col-md-12">
                <div class="nk-widget nk-widget-highlighted" style="min-height: 500px;">
                    <h4 class="nk-widget-title"><span>{{ __('Avatar Download') }}</span></h4>
                    <div class="nk-widget-content">
                        {{-- DISINI --}}
                        <div id="selectType" style="margin-top: 5px; margin-bottom: 5px;">
                            <!-- <label for="file_type"> Choose a type : </label> -->
                            <label><input type="radio" name="file_type" value="image" checked /> Image </label>
                            <!-- <label><input type="radio" name="file_type" value="video" /> Video </label> -->
                            <p>*The file size should be less than 35MB.</p>
                        </div>
                        <div id='inputFile'>
                            <label for="source"> Upload file : </label>
                            <input type='file' id='source' style="margin-right: 10px; margin-bottom: 10px;">
                            <button id="submit" type='submit' onclick="this.disabled=true;" class="btn btn-primary btn-lg" style="margin-left: auto;"> Run </button>
                        </div>

                        <div id='resultBox' style="margin-left: auto; margin-right: auto; margin-bottom: 40px;">
                            <p id='errorbox'></p>
                            <div id="result">
                                <!-- Nested grid -->
                                <div class="row">
                                    <img id="image" src="/static/use_cases.jpg" style="max-width:100%; max-height:100%;">
                                    <video id="video" controls style="max-width:100%; max-height:100%; display: none">
                                        <source type="video/mp4" src="">
                                    </video>
                                </div>
                                <br>
                                <div class="row">
                                    <a href="" id="down" download style="display: none">
                                        <button class="ui primary button">
                                            <i class="download icon"></i>
                                            Download
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    document.getElementById("submit").onclick = () => {
        document.getElementById("submit").disabled = true;
        document.getElementById("errorbox").innerHTML = "";

        document.getElementById("image").style.display = "none";
        document.getElementById("video").style.display = "none";
        document.getElementById("down").style.display = "none";

        const formData = new FormData();
        try {
            if (document.querySelector('input[name=file_type]:checked') == null) {
                throw Error("Please Choose file type");
            } else if (document.getElementById('source').files[0] == undefined) {
                throw Error("Please upload file");
            } else if (document.getElementById('source').files[0].size / (1000 * 1000) > 35) {
                throw Error("Please upload a file smaller than 35MB.");
            }
        } catch (e) {
            document.getElementById("errorbox").innerHTML = e;
            document.getElementById("submit").disabled = false;
            return;
        }

        const file_type = document.querySelector('input[name=file_type]:checked').value
        const source = document.getElementById('source').files[0]

        formData.append('source', source)
        formData.append('file_type', file_type)

        fetch(
                'https://master-white-box-cartoonization-psi1104.endpoint.ainize.ai/predict', {
                    method: 'POST',
                    body: formData,
                }
            )
            .then(async response => {
                if (response.status == 200) {
                    return response
                } else if (response.status == 413) {
                    throw Error("This file is larger than 35MB.")
                } else {
                    throw Error((await response.clone().json()).message)
                }
            })
            .then(response => response.blob())
            .then(blob => URL.createObjectURL(blob))
            .then(responseURL => {
                if (file_type === 'image') {
                    document.getElementById("image").src = responseURL;
                    document.getElementById("image").style.display = "inline";
                } else {
                    document.getElementById("video").src = responseURL;
                    document.getElementById("video").style.display = "inline";
                }
                document.getElementById("result").style.display = "inline";
                document.getElementById("down").setAttribute('href', responseURL);
                document.getElementById("down").style.display = "inline";
                document.getElementById("errorbox").innerHTML = "";
                document.getElementById("submit").disabled = false;
            })
            .catch(e => {
                document.getElementById("errorbox").innerHTML = e;
                document.getElementById("submit").disabled = false;
            })
    }
</script>
@endsection
@section('javascript')
@endsection