@extends('layouts.app')

@section('content')
<h1>Contact</h1>
<p class="lead">This is contact page </p>
{{ Form::open(array('url' => 'contact/submit')) }}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name..'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Email..'])}}
    </div>
    <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Your message..'])}}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{{ Form::close() }}
@endsection