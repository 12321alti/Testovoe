@extends('layouts.main')
@section('content')
    <div class="col-lg-9 mx-auto p-3 ">
        <h1>Добавить авто</h1>
        <form action="{{route('avto.store', $client_id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="model">model</label>
                <input type="text" name="model" class="form-control" id="model"  placeholder="model" value="{{old('model')}}">
                @error('model')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="marka">marka</label>
                <input type="text" name="marka" class="form-control" id="marka"  placeholder="marka" value="{{old('marka')}}">
                @error('marka')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="color">color</label>
                <input type="text" name="color" class="form-control" id="color"  placeholder="color" value="{{old('color')}}">
                @error('color')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="gos_number">gos_number</label>
                <input type="text" name="gos_number" class="form-control" id="gos_number"  placeholder="gos_number" value="{{old('gos_number')}}">
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
            <input hidden type="text" name="client_id" class="form-control" id="client_id"  placeholder="client_id" value="{{$client_id}}">

            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
@endsection
