@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush

@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <h1>Ajoutez une salle de concert </h1>
  <form class="" action="insertroom" method="post">
    @csrf
    <label for="">Nom de la salle :</label>
    <input required type="text" name="roomName" value="" placeholder="ex:Halle Tony Garnier">

    <label for="">Lieu : </label>
    <select class="" name="roomLocation">
      @foreach ($rooms as $room)
        <option value="">
          {{$room->location->name}}
        </option>
      @endforeach
    </select>
    <label for=""> Disponibilités :</label>
    <select class="" name="roomStatus">
      @foreach ($rooms as $room)
        <option value="">
          {{$room->status->name}}
        </option>
      @endforeach
    </select>

    <input type="submit" name="" value="Ajouter">

  </form>
@endsection
