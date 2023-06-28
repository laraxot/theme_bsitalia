@extends('pub_theme::errors.minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message')
 __('Not Found')
 {!! $message !!}
 {{ dddx(debug_backtrace()) }}
 @endsection
