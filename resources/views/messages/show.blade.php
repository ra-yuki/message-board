@extends('layouts.app')

@section('content')
    <h1>Message Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>{{ $message->id }}</th>
        </tr>
        <tr>
            <th>title</th>
            <td>{{ $message->title }}</td>
        </tr>
        <tr>
            <th>message</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    {!! link_to_route('messages.edit', 'Edit', ['id' => $message->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection