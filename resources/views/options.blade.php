@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush

@extends('layouts.base')

@section('title', 'Home')

@section('content')
@endsection
