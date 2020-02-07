@extends('layouts.app')

@section('content')
    <h1>Terminy rezerwacji</h1>
    <a class="btn btn-primary" href="{{route('terminRezerwacji.create')}}">Dodaj termin</a>
    <table class="table table-hover">
    <tr>
        <th></th>
        <th>Samochód</th>
        <th>Od</th>
        <th>Do</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($terminRezerwacjis as $terminRezerwacji)
        <tr>
            <td>{{$terminRezerwacji->id}}</td>
            <td>{{$terminRezerwacji->idsamochod}}</td>
            <td>{{$terminRezerwacji->od}}</td>
            <td>{{$terminRezerwacji->do}}</td>
            <td><a class="btn btn-info" href="{{route('terminRezerwacji.edit', $terminRezerwacji)}}">Edit</a></td>
            <td>
                {!! Form::model($terminRezerwacji, ['route' => ['terminRezerwacji.delete', $terminRezerwacji], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
