@extends('layout.app')
@section('title', 'Форма для заявки')
@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Оставить заявку</h3>
        <div class="container mt-6">
            <form method="post" action="{{ route('sendRequest') }}">
                @csrf
                <label for="exampleFormControlTextarea1">Введите ваше имя</label>
                <input name="name" id="name" type="text" class="form-control @error('name') border-red-500 @enderror"/>
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label for="exampleFormControlTextarea1">Введите вашу фамилию</label>
                <input name="lastName" id="last_name" type="text" class="form-control @error('last_name') border-red-500 @enderror"/>
                @error('last_name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label for="exampleFormControlTextarea1">Введите ваш телефон</label>
                <input name="phone" type="text" class="form-control @error('phone') border-red-500 @enderror"/>
                @error('phone')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <label for="exampleFormControlTextarea1">Введите ваш email</label>
                <input name="email" type="email" class="form-control @error('email') border-red-500 @enderror"/>
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary mt-4">Отправить заявку</button>
            </form>
        </div>
    </div>
    <a href="{{ route('add_answer', $request->id) }}" class="btn btn-success mt-4">CRM</a>
@endsection
