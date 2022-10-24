@extends('pub_theme::layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Profile</h1>
            <h3>First name: {{ $profile->getProfile()->firstname }}</h3>
            <h3>Last name: {{ $profile->getProfile()->surname }}</h3>
            <h3>Email: {{ $profile->getProfile()->email }}</h3>
            <h3>Address: {{ $profile->getProfile()->address }}</h3>
        </div>
    </div>
@endsection
