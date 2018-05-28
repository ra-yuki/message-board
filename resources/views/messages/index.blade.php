@extends('layouts.app')

@section('content')
    <h1>List of Messages</h1>
    @if(count($messages) > 0)
        @foreach ($messages as $message)
            <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{$message->content}}</li>
        @endforeach
    @endif
    
    {!! link_to_route('messages.create', 'Post new message') !!}
@endsection