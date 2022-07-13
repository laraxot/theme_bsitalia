@php
//dddx($_theme->lastSitePresses());

//*
dddx(
    xotModel('press')
        ::withAnyTags(['channel_one'], 'target')
        ->get(),
);
/*/

@endphp
?>
@extends('pub_theme::layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mt-4 mb-4">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h5 class="mb-md-0">
                        Clips
                    </h5>
                </div>
            </div>

            @foreach ($_theme->lastSitePresses() as $media)
                @php
                    //dddx([$media, $media->video_url]);
                @endphp
                <div class="col-sm-6 col-lg-4">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <div class="overflow-hidden fullscreen-video w-100">
                                <!-- HTML video START -->
                                <div class="player-wrapper card-img-top overflow-hidden">
                                    <video class="player-html" controls crossorigin="anonymous"
                                        poster="{{ $media->poster_path }}">
                                        <source src="{{ $media->video_url }}" type="video/mp4">
                                    </video>
                                </div>
                                <!-- HTML video END -->
                            </div>
                        </div>
                        @php
                            //dddx($media->author);
                        @endphp
                        <!-- Video info -->
                        <div class="card-body position-relative">
                            <!-- Video title  -->
                            <h6>
                                <a class="stretched-link" href="video-details.html">{{ $media->title }}</a>
                            </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <x-img class="avatar-img rounded-circle" src="{{ optional($media->channel)->logo }}"
                                        alt="" />
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1">
                                        <a href="#!"> {{ optional($media->channel)->name }} </a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Video END -->
                </div>
            @endforeach
        </div>
    </div>
@endsection
