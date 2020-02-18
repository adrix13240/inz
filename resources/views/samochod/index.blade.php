@extends('layouts.app')

@section('content')

    <h1>Lista wszystkich samochodów</h1>
    <a class="btn btn-primary" href="{{route('samochod.create')}}">Dodaj samochód</a>
    <table class="table table-hover">
        <tr>
            <th></th>
            <th>Marka</th>
            <th>Model</th>
            <th>Segment</th>
            <th>Skrzynia</th>
            <th>Kolor</th>
            <th>Tempomat</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($samochods as $samochod)
            <tr>
                <td>{{$samochod->id}}</td>
                <td>{{$samochod->marka->nazwa}}</td>
                <td>{{$samochod->model}}</td>
                <td>{{$samochod->segment->nazwa}}</td>
                <td>{{$samochod->skrzynia}}</td>
                <td>{{$samochod->kolor}}</td>
                <td>{{$samochod->tempomat}}</td>
                <td><a class="btn btn-info" href="{{route('samochod.edit', $samochod)}}">Edit</a></td>
                <td>
                    {!! Form::model($samochod, ['route' => ['samochod.delete', $samochod], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    <th>
@endsection
