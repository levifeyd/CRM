@extends('layout.app')
@section('title', 'Добавить комментарий на заявку')
@section('content')
    @include('partials.header')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Комментарий к заявке №{{$client->id}}</h3>
        <div class="container mt-6">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <form method="POST" action="{{ route('update_comment', $client->id) }}">
                @csrf
                @method('PUT')
                @if(isset($client->comment))
                    <label class="card-header">Примечание: Комментарий который уже оставили : "{{$client->comment}}"
                        , вы можете дополнить его</label>
                @endif
                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1"
                              rows="10" placeholder="Напишите комментарий к заявке"></textarea>
                <button type="submit" class="btn btn-primary mt-4">Отправить</button>
            </form>
        </div>
    </div>
@endsection
