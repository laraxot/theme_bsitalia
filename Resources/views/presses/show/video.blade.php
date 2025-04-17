@php
//dddx($row);
@endphp
@extends('pub_theme::layouts.app')
@section('content')
    <main>

        <!-- Container START -->
        <div class="container-fluid">

            @if (Auth::check())
                @include('pub_theme::home.video.sidebar')
            @endif

            <!-- Main content START -->
            <div class="page-content">

                <!-- Official trailer START -->
                <div class="row g-0 mb-4">
                    {{-- se inserisco i commen ti laterali riprisinare css originale
                        <divclass="col-xl-8col-xxl-9"> --}}
                    <div class="col-xl-12 col-xxl-12">
                        <!-- Video START -->
                        <div class="card card-body p-0 rounded-end-lg-0 position-relative h-100">
                            <!-- Video image -->

                            <div class="card-image">
                                <div class="overflow-hidden fullscreen-video w-100">
                                    <!-- HTML video START -->
                                    <div class="player-wrapper card-img-top overflow-hidden">
                                        {{-- <video class="player-html" controls crossorigin="anonymous" poster="">
                                            <source src="{{ $row->video_url }}" type="video/mp4">
                                        </video> --}}
                                        <videoplayer-component src="{{ $row->video_url }}" id="my-video"
                                            currentTime="{{ request('currentTime', 0) }}"
                                            :markers='{!! $_theme->getVideoMarkersJson() !!}'>
                                        </videoplayer-component>
                                    </div>
                                    <!-- HTML video END -->
                                </div>
                            </div>

                            <!-- Video info -->
                            <div class="card-body">


                                <div class="d-xxl-flex justify-content-between mb-3">
                                    @include('pub_theme::presses.show.sub_info')


                                    {{-- @include('pub_theme::presses.show.share') --}}

                                </div>
                                <div class="subtitle-text">
                                    {!! $row->html !!}
                                </div>
                            </div>
                        </div>
                        <!-- Video END -->
                    </div>

                    {{-- @include('pub_theme::presses.show.comment') --}}

                </div>
                <!-- Official trailer END -->

                {{-- @include('pub_theme::presses.show.related') --}}

                @if (isset($footer) && $footer == 'off')
                @else
                    @include('pub_theme::layouts.partials.footer')
                @endif
            </div>
            <!-- Main content END -->

        </div>
        <!-- Container END -->

    </main>
@endsection
