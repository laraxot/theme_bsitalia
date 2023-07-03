{{--  
@extends('pub_theme::errors.minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message')
    {{ $message ?? ''}}
@endsection
--}}
{{-- https://github.com/italia/developers.italia.it/blob/master/403.html --}}
@extends('pub_theme::layouts.app',['lang'=>'it'])
@section('content')
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-12 my-5">
      <div class="error text-center">
        <!-- Error title -->
        <h2 class="error-code">403</h2>
        <p class="lead font-weight-bold">{{ trans('Forbidden') }}</p>
        <p class="lead font-weight-bold">{{ $message ?? ''}}</p>
        @guest
        <a href="{{ route('login') }}" class="btn btn-primary mt-5">Login</a>
        @endguest
        <a href="/" class="btn btn-primary mt-5">Home</a>
      </div> <!-- /error -->
    </div>
  </div>
</div> <!-- /container -->
@endsection