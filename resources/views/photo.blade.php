@extends('template')

@section('content')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Send a picture</div>
            <div class="panel-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger">{!! session('error') !!}</div>
                @endif
                {!! Form::open(['url' => 'photo', 'files' => true]) !!}
                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                    {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Send !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
