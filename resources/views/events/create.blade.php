@extends('layouts.app')

@section('content')
    <h1>Créer un Evenement.</h1>

    <form class="" action="{{ route('events.store') }}" method="post">
        {{ csrf_field()}}

        @include('events._form', ['submitButtonText' => 'Créer un événement'])

    </form>

    <p><a href="{{ route('home') }}">Annuler</a> </p>
@endsection
