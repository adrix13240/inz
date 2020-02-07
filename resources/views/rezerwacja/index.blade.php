@extends('layouts.app')

@section('content')

    <h1>Lista wszystkich rezerwacji</h1>
    <a class="btn btn-primary" href="{{route('rezerwacja.create')}}">Dodaj rezerwację</a>
    <table class="table table-hover">
    <tr>
        <th></th>
        <th>Użytkownik</th>
        <th>Status</th>
        <th>Początek</th>
        <th>Koniec</th>
        <th>Od</th>
        <th>Do</th>
        <th>Samochód</th>
        <th>Ubezpieczenie</th>
        <th>Fotelik</th>
        <th>Nawigacja</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($rezerwacjas as $rezerwacja)
        <tr>
            <td>{{$rezerwacja->id}}</td>
            <td>{{$rezerwacja->iduser}}</td>
            <td>{{$rezerwacja->idstatus}}</td>
            <td>{{$rezerwacja->idpoczatek}}</td>
            <td>{{$rezerwacja->idkoniec}}</td>
            <td>{{$rezerwacja->od}}</td>
            <td>{{$rezerwacja->do}}</td>
            <td>{{$rezerwacja->idsamochod}}</td>
            <td>{{$rezerwacja->idubezpieczenie}}</td>
            <td>{{$rezerwacja->fotelik}}</td>
            <td>{{$rezerwacja->nawigacja}}</td>
            <td><a class="btn btn-info" href="{{route('rezerwacja.edit', $rezerwacja)}}">Edit</a></td>
            <td>
                {!! Form::model($rezerwacja, ['route' => ['rezerwacja.delete', $rezerwacja], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
