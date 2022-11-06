@extends('app')

@push('styles')
<link href="{{ asset('public/assets/lib/datatables-bs4/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/lib/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/lib/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/lib/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="card mb-3">
    <div class="card-body rounded-soft bg-gradient">
        <div class="row text-white align-items-center no-gutters">
        <div class="col">
            <h4 class="text-white mb-0">Today $764.39</h4>
            <p class="fs--1 font-weight-semi-bold">Yesterday <span class="opacity-50">$684.87</span></p>
        </div>
        <div class="col-auto d-none d-sm-block">
            <select class="custom-select custom-select-sm mb-3" id="dashboard-chart-select">
            <option value="all">All Payments</option>
            <option value="successful" selected="selected">Successful Payments</option>
            <option value="failed">Failed Payments</option>
            </select>
        </div>
        </div>
        <canvas class="max-w-100 rounded" id="chart-line" width="1618" height="375" aria-label="Line chart" role="img"></canvas>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('public/assets/lib/sticky-kit/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/is_js/is.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="{{ asset('public/assets/lib/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/datatables-bs4/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/datatables.net-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('public/assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('public/assets/lib/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('public/assets/lib/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('public/assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
@endpush