@extends('layouts.main')
@section('content')
    <div class="col-lg-9 mx-auto p-3 ">
        <h1>Изменить авто</h1>
        <form action="{{route('avto.update', ['client_id' => $client->id, 'id' => $avto->id])}}" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="model">model</label>
                <input type="text" name="model" class="form-control" id="model"  placeholder="model" value="{{$avto->model}}">
                @error('model')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="marka">marka</label>
                <input type="text" name="marka" class="form-control" id="marka"  placeholder="marka" value="{{$avto->marka}}">
                @error('marka')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="color">color</label>
                <input type="text" name="color" class="form-control" id="color"  placeholder="color" value="{{$avto->color}}">
                @error('color')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="gos_number">gos_number</label>
                <input type="text" name="gos_number" class="form-control" id="gos_number"  placeholder="gos_number" value="{{$avto->gos_number}}">
                @error('gos_number')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="parking">parking</label>
                <select class="form-control" id="parking" name="parking">
                    <option value="0">not</option>
                    <option value="1">yes</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
@endsection
