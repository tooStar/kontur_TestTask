@extends('layouts.app')

@section('title') Данные из формы @endsection

@section('content')
    <h1>Данные из формы</h1>

    <p>Name: {{ $mailData['name'] }}</p>
    <p>Phone: {{ $mailData['phone'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
@endsection