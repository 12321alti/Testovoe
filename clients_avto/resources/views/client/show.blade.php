@extends('layouts.main')
@section('content')
    <div class="col-lg-9 mx-auto p-3 ">
        <h1>Клиент</h1>
        <form action="{{route('client.update', $client->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="FIO">fio</label>
                <input type="text" name="fio" class="form-control" id="fio"  placeholder="fio" value="{{$client->fio}}">
                @error('fio')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="man">man</option>
                    <option value="woman">woman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telephone">telephone</label>
                <input type="text" name="telephone" class="form-control" id="telephone"  placeholder="telephone" value="{{$client->telephone}}">
                @error('telephone')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="text" name="address" class="form-control" id="address"  placeholder="address" value="{{$client->address}}">
                @error('address')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
        <div>
            <form  action="{{ route('client.delete', $client->id)}}" method="post">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Удалить клиента">
            </form>
        </div>
        <br><br>
        <h1>Автомобили</h1>

        @foreach($avtos as $avto)
            @if($client->id === $avto->client_id)
                <p><a class="btn btn-secondary" href="{{route('avto.edit', ['client_id' => $client->id, 'id' => $avto->id])}}">Изменить {{$avto->model}}</a></p>
            @endif
        @endforeach

        <a class="btn btn-primary" href="{{route('avto.create', $client->id)}}">Добавить новый автомобиль</a>
    </div>
@endsection
