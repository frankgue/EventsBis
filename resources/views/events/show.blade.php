@extends('layouts.app')

@section('content')
    <h1>{{$event->title}}</h1>

    <p>Description : {{ $event->description }}</p>

    <a class="btn btn-primary" href="{{ route('events.edit', $event->id) }}">Modifier</a>

    <form class="inline-block" action="{{ route('events.destroy', $event->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" class="btn btn-danger" value="Supprimer">
    </form>
    <hr>
    <p>
        <i class="fa fa-eye" aria-hidden="true"></i>
        <a href="{{ route('home') }}">Voir tous les évènements</a>
    </p>
@endsection
