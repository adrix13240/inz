@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{route('oddzialFirmys.create')}}">Dodaj oddział firmy</a>
    <table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>PESEL</th>
        <th>Ulica</th>
        <th>Numer Domu</th>
        <th>Miejscowość</th>
        <th>Kod pocztowy</th>
        <th>Poczta</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($oddzialFirmys as $oddzialFirmy)
        <tr>
            <td>{{$oddzialFirmy->id}}</td>
            <td>{{$oddzialFirmy->imie}}</td>
            <td>{{$oddzialFirmy->nazwisko}}</td>
            <td>{{$oddzialFirmy->pesel}}</td>
            <td>{{$oddzialFirmy->ulica}}</td>
            <td>{{$oddzialFirmy->numerDomu}}</td>
            <td>{{$oddzialFirmy->miejscowosc}}</td>
            <td>{{$oddzialFirmy->kodPocztowy}}</td>
            <td>{{$oddzialFirmy->poczta}}</td>
            <td><a class="btn btn-info" href="{{route('oddzialFirmys.edit', $oddzialFirmy)}}">Edit</a></td>
            <td>
                {!! Form::model($oddzialFirmy, ['route' => ['oddzialFirmys.delete', $oddzialFirmy], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
