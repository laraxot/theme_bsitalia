@extends('pub_theme::layouts.master')

@section('bootstrapitalia_css')
    @stack('css')
    @yield('css')
@stop

@section('body')
    @include('pub_theme::layouts.partials.headernav')
    <!-- Body -->
    {{--
        <div class="container my-4">
    --}}
    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- End Body -->
     @stack('modals')
   @include('pub_theme::layouts.partials.footer')
   @include('pub_theme::layouts.partials.scripts')


@stop

@section('bootstrapitalia_js')
    @stack('js')
    @yield('js')
@stop
