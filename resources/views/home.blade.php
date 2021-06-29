@extends('layouts.plantilla')
@section('title','Home')
@section('content')

    <div id='Listas' class='container bg-secondary pad'>
        <div id='title' class='col text-center text-light col-md-offset-2"'>
            <h1>Test de Evaluación de Mundo Pacifico</h1>
        </div>

        <div id='' class='row"'>
            <div class='col box'>
                <select name="" id="_regiones" class="form-select" aria-label=".form-select-lg example">
                    @foreach ($regiones as $item)
                        <option value="{{$item->id}}">{{$item->region}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class='row"'>
            <div class='col box'>
                <select name="" id="_provincias" class='form-select'></select>
            </div>
        </div>

        <div class='row"'>
            <div class='col box'>
                <select name="" id="_comunas" class='form-select'></select>
            </div>
        </div>

        <div class="input-group input-group-lg box">
            <span class="input-group-text" id="inputGroup-sizing-lg">Calle</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>

        <div class='col box'>
            <div class="btn-group-lg text-center col-md-12" >
                <button type="button" class="btn btn-primary col-md-12">Aceptar</button>
            </div>
        </div>

    </div>

@endsection



