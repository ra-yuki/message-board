@extends('layouts.app')

@section('content')
    <h1>List of Messages</h1>
    @if(count($messages) > 0)
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}
                        <td>{{$message->title}}</td>
                        <td>{{$message->content}}</td>
                    </td>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('messages.create', 'Post New', null, ['class' => 'btn btn-primary']) !!}
@endsection