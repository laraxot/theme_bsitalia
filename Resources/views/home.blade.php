@extends('pub_theme::layouts.app')
@section('content')
    {{-- <x-home/> --}}

    @include('pub_theme::home.' . config('xra.home', 'show'))
@endsection
