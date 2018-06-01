@extends('layouts.app')

@section('content')
    <h1>Edit for id: {{ $message->id }}</h1>
    
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
        
                {!! Form::label('content', 'Message') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
        
                {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection