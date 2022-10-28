@extends('pub_theme::layouts.app')
@section('content')
    @push('styles')
        <style>
            .card::after {
                margin-top: 0;
            }
        </style>
    @endpush
    <div class="container my-4">
        <div class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <h2>{{ $_theme->countAllReports() }}</h2>
                                        <h5>Fonti Indicizzate</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <h2>{{ $_theme->countMyReports() }}</h2>
                                        <h5>Fonti Proprietarie</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <h2>{{ $_theme->countMyKeywords() }}</h2>
                                        <h5>Keywords Monitorate</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <x-chartjs.base chartid="chart_1" type="pie1" :labels="['clearWeb', 'onion', 'closInt']"
                                            :data="[50, 30, 20]"></x-chartjs.base>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <x-chartjs.base chartid="chart_2" type="pie1" :labels="['url', 'users', 'string']"
                                            :data="[123, 5423, 21323]"></x-chartjs.base>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <x-chartjs.base chartid="chart_3" type="bar2" :labels="[65, 59, 80, 81, 56, 55, 40]"
                                            :data="[65, 59, 80, 81, 56, 55, 40]"></x-chartjs.base>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <!--start card-->
                            <div class="card-wrapper card-space">
                                <div class="card card-bg">
                                    <div class="card-body text-center">
                                        <p>
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Data Alert</th>
                                                <th>Severity</th>
                                                <th>Entry Point</th>
                                            </tr>
                                            <tr>
                                                <td>a</td>
                                                <td>b</td>
                                                <td>c</td>
                                            </tr>
                                            <tr>
                                                <td>a</td>
                                                <td>b</td>
                                                <td>c</td>
                                            </tr>
                                            <tr>
                                                <td>a</td>
                                                <td>b</td>
                                                <td>c</td>
                                            </tr>
                                        </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
