@extends('pub_theme::layouts.app')
@section('content')
	@include('pub_theme::home.' . config('xra.home', '01'))
@endsection