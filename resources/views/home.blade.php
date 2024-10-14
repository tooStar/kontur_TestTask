@extends('layouts.app')

@section('title') Регистрация @endsection

@section('content')
    <h1>Форма</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors -> all() as $err)
            <li>{{ $err }}</li>
                
            @endforeach
        </ul>
    </div>

    @endif

    <form action="{{ route('submit') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Введите ваш номер телефона</label>
            <input type="phone" name="phone" placeholder="Введите телефон" id="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите почту</label>
            <input type="email" name="email" placeholder="Введите почту" id="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection