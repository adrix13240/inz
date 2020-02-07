@extends('layouts.app')

@section('content')

    <h1>Lista wszystkich segmentów</h1>
    <a class="btn btn-primary" href="{{route('segment.create')}}">Dodaj segment</a>
    <table class="table table-hover">
    <tr>
        <th></th>
        <th>Nazwa segmentu</th>
        <th>Cena</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($segments as $segment)
        <tr>
            <td>{{$segment->id}}</td>
            <td>{{$segment->nazwa}}</td>
            <td>{{$segment->cena}}</td>
            <td><a class="btn btn-info" href="{{route('segment.edit', $segment)}}">Edit</a></td>
            <td>
                {!! Form::model($segment, ['route' => ['segment.delete', $segment], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    @endsection
