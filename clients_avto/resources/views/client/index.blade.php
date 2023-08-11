@extends('layouts.main')
@section('content')
    <div class="col-lg-9 mx-auto p-3 ">
    <div>
        <h1 class="text-body-emphasis border-bottom pb-3 mb-5">Все клиенты</h1>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="dark">
        <tr class="table-dark">
            <th scope="col">Fio</th>
            <th scope="col">Avto</th>
            <th scope="col">number</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            @foreach($avtos as $avto)
                @if($client->id == $avto->client_id)
                <tr>
                    <td class="col-sm-3">{{$client->fio}}</td>
                    <td class="col-sm-3">{{$avto->model}}</td>
                    <td class="col-sm-2">{{$avto->gos_number}}</td>
                    <td class="col-sm-1 text-center"><a class="btn btn-primary" href="{{route('client.show', $client->id)}}">edit</a>
                    </td>
                    <td class="col-sm-1 text-center">
                        <div>
                        <form  action="{{ route('avto.delete', ['client_id' => $client->id, 'id' => $avto->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn-close" type="submit" value="">
                        </form>
                        </div>
                    </td>
                </tr>
                @endif
            @endforeach
        @endforeach
        </tbody>
    </table>
    <div>
        {{$avtos->links()}}
    </div>

        <div>
            <p><a class="btn btn-primary" href="{{route('client.create')}}">Добавить клиента</a></p>
        </div>
    </div>
@endsection
