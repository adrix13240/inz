@extends('layouts.app')

@section('content')
    <h1>Lista statusów rezerwacji</h1>
    <a class="btn btn-primary" href="{{route('statusRezerwacji.create')}}">Dodaj status rezerwacji</a>
    <table class="table table-hover">
    <tr>
        <th></th>
        <th>Nazwa statusu</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($statusRezerwacjis as $statusRezerwacji)
        <tr>
            <td>{{$statusRezerwacji->id}}</td>
            <td>{{$statusRezerwacji->nazwa}}</td>
            <td><a class="btn btn-info" href="{{route('statusRezerwacji.edit', $statusRezerwacji)}}">Edit</a></td>
            <td>
                {!! Form::model($statusRezerwacji, ['route' => ['statusRezerwacji.delete', $statusRezerwacji], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
