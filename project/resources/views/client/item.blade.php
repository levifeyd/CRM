<div class="card mb-4">
    <h8 class="card-header">Заявка №{{$client->id}}</h8>
    <h8 class="card-header">Имя клиента: {{$client->name}}</h8>
    <h8 class="card-header">Фамилия клиента: {{$client->lastName}}</h8>
    <h8 class="card-header">Телефон клиента: {{$client->phone}}</h8>
    <h8 class="card-header">Email клиента: {{$client->email}}</h8>
    @if(isset($client->comment))
        <h8 class="card-header">Комментарий к заявке: {{$client->comment}}</h8>
    @endif
</div>
<a href="{{route('add_comment', $client->id)}}" class="btn btn-success mb-4">Добавить комментраий к заявке</a>
