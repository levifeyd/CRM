@extends('layout.app')
@section('title', 'CRM система')
@section('content')
    @include('partials.header')
    <div class="container mx-auto px-6 py-8">
        <div class="container mt-6">
            <div class="row">
                <div class="col-md-12">
                @foreach($clients as $clients)
                        <div class="card mb-4">
                                <h8 class="card-header">Заявка №{{$clients->id}}</h8>
                                <h8 class="card-header">Имя клиента: {{$clients->name}}</h8>
                                <h8 class="card-header">Фамилия клиента: {{$clients->lastName}}</h8>
                                <h8 class="card-header">Телефон клиента: {{$clients->phone}}</h8>
                                <h8 class="card-header">Email клиента: {{$clients->email}}</h8>
                            @if(isset($request->comment))
                                <h8 class="card-header">Комментарий к заявке: {{$clients->comment}}</h8>
                            @endif
                        </div>
                        <a href="#" class="btn btn-success mb-4">Добавить комментраий к заявке</a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
