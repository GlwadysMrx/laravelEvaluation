@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush

@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <div class="rooms">
    <table class="table">
    <tr>
      <th class="column">Salles</th>
      <th class="column">Lieux</th>
      <th class="column">Disponibilités</th>
    </tr>
      @foreach ($rooms as $room)
        <tr>
          <td>{{$room->name}}</td>
          <td>{{$room->location->name}}</td>
          <td>{{$room->status->name}}</td>
        </tr>
      @endforeach
  </div>
@endsection
