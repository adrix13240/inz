@extends('layouts.app')

@section('content')
    <h1>Lista ubezpieczeń</h1>
    <a class="btn btn-primary" href="{{route('ubezpieczenie.create')}}">Dodaj ubezpieczenie</a>
    <table class="table table-hover">
    <tr>
        <th></th>
        <th>Nazwa</th>
        <th>Cena</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($ubezpieczenies as $ubezpieczenie)
        <tr>
            <td>{{$ubezpieczenie->id}}</td>
            <td>{{$ubezpieczenie->nazwa}}</td>
            <td>{{$ubezpieczenie->cena}}</td>
            <td><a class="btn btn-info" href="{{route('ubezpieczenie.edit', $ubezpieczenie)}}">Edit</a></td>
            <td>
                {!! Form::model($ubezpieczenie, ['route' => ['ubezpieczenie.delete', $ubezpieczenie], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
