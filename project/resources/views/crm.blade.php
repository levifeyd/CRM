@extends('layout.app')
@section('title', 'CRM система')
@section('content')
    @include('partials.header')
    <div class="container mx-auto px-6 py-8">
        <div class="container mt-6">
            <div class="row">
                <div class="col-md-12">
                @foreach($clients as $client)
                    @if($userId == 1)
                        @if($client->id % 2 != 0)
                            @include('client.item')
                        @endif
                        @elseif($userId == 2)
                            @if($client->id % 2 == 0)
                                @include('client.item')
                            @endif
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
