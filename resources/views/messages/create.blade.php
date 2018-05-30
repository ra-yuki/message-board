@extends('layouts.app')

@section('content')
    <h1>Post New Message</h1>
    
    {!! Form::model($message, ['route'=>'messages.store']) !!}
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', 'Message') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
@endsection