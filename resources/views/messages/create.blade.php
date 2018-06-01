@extends('layouts.app')

@section('content')
    <h1>Post New Message</h1>
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($message, ['route'=>'messages.store']) !!}
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                
                {!! Form::label('content', 'Message') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
                
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection