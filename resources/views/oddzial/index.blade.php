@extends('layouts.app')

@section('content')
    <h1>Lista wszystkich oddziałów</h1>
    <a class="btn btn-primary" href="{{route('oddzial.create')}}">Dodaj oddział firmy</a>
    <table class="table table-hover">
    <tr>
        <th></th>
        <th>Miasto</th>
        <th>Ulica</th>
        <th>Telefon</th>
        <th>Adres email</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($oddzials as $oddzial)
        <tr>
            <td>{{$oddzial->id}}</td>
            <td>{{$oddzial->miasto}}</td>
            <td>{{$oddzial->ulica}}</td>
            <td>{{$oddzial->telefon}}</td>
            <td>{{$oddzial->email}}</td>
            <td><a class="btn btn-info" href="{{route('oddzial.edit', $oddzial)}}">Edit</a></td>
            <td>
                {!! Form::model($oddzial, ['route' => ['oddzial.delete', $oddzial], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
