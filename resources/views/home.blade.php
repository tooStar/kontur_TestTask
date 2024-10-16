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

    <form action="{{ route('submit') }}" method="post" id="home">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '{{ route('submit') }}',
                data: $('form').serialize(),
                success: function(response) {
                    alert('Данные успешно отправлены!');
                    $('form')[0].reset();
                }
            });
        });
    });
</script>

@endsection