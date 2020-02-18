@extends('layouts.app')

@section('title', 'Dodawanie marki')

@section('content')
        <h1>Nowy samochod</h1>

            {!! Form::open(['route' => 'samochod.store']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                {!! Form::label('idmarka', "Marka:") !!}
                {!! Form::select('idmarka', $marki, null, ['id' => 'idmarka', 'class'=>'form-control custom-select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('model', "Model:") !!}
                {!! Form::text('model', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('idsegment', "Segment:") !!}
                {!! Form::select('idsegment', $segmenty, null, ['id' => 'idsegment', 'class'=>'form-control custom-select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('idoddzial', "Oddział firmy:") !!}
                {!! Form::select('idoddzial', $oddzialy, null, ['id' => 'idoddzial', 'class'=>'form-control custom-select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('skrzynia', "Skrzynia biegów:") !!}
                {!! Form::select('skrzynia', array('Automatyczna' => 'Automatyczna', 'Manualna' => 'Manualna'), null, ['class'=>'form-control custom-select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kolor', "Kolor:") !!}
                {!! Form::select('kolor', array('Biały' => "Biały",
                                                'Brązowy' => 'Brązowy',
                                                'Czarny' => "Czarny",
                                                'Czerwony' => 'Czerwony',
                                                'Niebieski' => 'Niebieski',
                                                'Srebrny' => 'Srebrny',
                                                'Żółty' => 'Żółty'), null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('paliwo', "Paliwo:") !!}
                {!! Form::select('paliwo', array('Benzyna' => 'Benzyna', 'Diesel' => 'Diesel'), null, ['class'=>'form-control custom-select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('miejsca', "Liczba miejsc:") !!}
                {!! Form::number('miejsca', 5, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('zamek', "Centralny zamek:") !!}
                {!! Form::checkbox('zamek', '1'); !!}
            </div>
            <div class="form-group">
                {!! Form::label('klimatyzacja', "Klimatyzacja:") !!}
                {!! Form::checkbox('klimatyzacja', '1'); !!}
            </div>
        <div class="form-group">
            {!! Form::label('tempomat', "Tempomat:") !!}
            {!! Form::checkbox('tempomat', '1'); !!}
        </div>

            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
