@extends('layouts.app')

@section('content')
    <h1>Modifier l'éEvenement #{{ $event->id}}.</h1>

    <form class="" action="{{ route('events.update', $event->slug) }}" method="post">
        {{ csrf_field()}}
        {{ method_field('PUT')}}

        @include('events._form', ['submitButtonText' => 'Modifier l\'évenement'])

    </form>

    <p><a href="{{ route('home') }}">Annuler</a> </p>
@endsection
