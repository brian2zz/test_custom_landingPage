@push('styles')
    <style>
        .red-container {
            background-color: #2A3F54;
            color: white;
            padding: 20px;
            /* height: calc(100vh - 60px); */
            /* Sesuaikan dengan tinggi header dan footer Anda */
            overflow-y: auto;
        }
    </style>
@endpush
@extends('layout.main')
@section('content')
    <!-- page content -->
    <iframe id="secondaryPage" src="{{ url('/test') }}" width="1920" height="845" frameborder="0"></iframe>
<!-- Modal -->
  
    <!-- /page content -->
@endsection
