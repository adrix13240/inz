@extends('layouts.app')

@section('content')
    <div class="form-group" style="width:80%; margin:auto" align="center">
    <h1>Lista wszystkich marek</h1>
    <a class="btn btn-primary" href="{{route('marka.create')}}">Dodaj markę</a>
    <table class="table table-hover" style="margin-top:10px">
    <tr>
        <th></th>
        <th>Nazwa marki</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($markas as $marka)
        <tr>
            <td>{{$marka->id}}</td>
            <td>{{$marka->nazwa}}</td>
            <td><a class="btn btn-info" href="{{route('marka.edit', $marka)}}">Edit</a></td>
            <td>
                {!! Form::model($marka, ['route' => ['marka.delete', $marka], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    @endsection
