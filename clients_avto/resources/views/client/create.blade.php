@extends('layouts.main')
@section('content')
    <div class="col-lg-9 mx-auto p-3 ">
        <form action="{{route('client.store')}}" method="post">
            @csrf
            <h1>Добавить клиента</h1>
            <div class="form-group">
                <label for="FIO">fio</label>
                <input type="text" name="fio" class="form-control" id="fio"  placeholder="fio" value="{{old('fio')}}">
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
                <input type="text" name="telephone" class="form-control" id="telephone"  placeholder="telephone" value="{{old('telephone')}}">
                @error('telephone')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="text" name="address" class="form-control" id="address"  placeholder="address" value="{{old('address')}}">
                @error('address')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <h1>Его автомобиль</h1>
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



            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
@endsection
