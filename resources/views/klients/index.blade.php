@extends('layouts.app')

@section('content')
    <a class="btn btn-primary" href="{{route('klients.create')}}">Dodaj klienta</a>
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
    @foreach($klients as $klient)
        <tr>
            <td>{{$klient->id}}</td>
            <td>{{$klient->imie}}</td>
            <td>{{$klient->nazwisko}}</td>
            <td>{{$klient->pesel}}</td>
            <td>{{$klient->ulica}}</td>
            <td>{{$klient->numerDomu}}</td>
            <td>{{$klient->miejscowosc}}</td>
            <td>{{$klient->kodPocztowy}}</td>
            <td>{{$klient->poczta}}</td>
            <td><a class="btn btn-info" href="{{route('klients.edit', $klient)}}">Edit</a></td>
            <td>
                {!! Form::model($klient, ['route' => ['klients.delete', $klient], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
