@extends('template')

@section('content')
    <h2>Contact about wy beautiful website</h2>
    <p>Following data :</p>
    <ul>
        <li><strong>Name</strong> : {{ $name }}</li>
        <li><strong>Email</strong> : {{ $email }}</li>
        <li><strong>Message</strong> : {{ $text }}</li>
    </ul>
@endsection
