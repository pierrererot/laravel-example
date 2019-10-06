@extends('template')

@section('content')
    {!! Form::open(['url' => 'users']) !!}
    {!! Form::label('nom', 'Type your name : ') !!}
    {!! Form::text('nom') !!}
    {!! Form::submit('Send !') !!}
    {!! Form::close() !!}
@endsection
