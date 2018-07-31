@extends('layouts.app')

@section('content')
    <h1>{{ $events->count() }} {{ str_plural('Evenement', $events->count()) }}.</h1>

    @if(! $events->isEmpty())
        <ul>
            @foreach($events as $event)
                <li>
                    <a href="{{ route('events.show', ['event' => $event->id]) }}">
                        {{ $event->title }}
                    </a>
                 </li>
            @endforeach
        </ul>
        {{ $events->links('vendor.pagination.bootstrap-4') }}
    @else
        <p>Aucun evenement pour le moment</p>
    @endif

@endsection
