@extends('layouts.app')

@section('content')
    <h1>id: {{ $message->id }} のメッセージ編集ページ!</h1>
    
    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'Message') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection