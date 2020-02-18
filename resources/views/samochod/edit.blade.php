@extends('layouts.app')

@section('content')
            <h1>Edycja marki</h1>

    {!! Form::model($samochod, ['route' => ['samochod.update', $samochod], 'method' => 'PUT']) !!}

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
                {!! Form::label('skrzynia', "Skrzynia biegów:") !!}
                {!! Form::select('skrzynia', array('Automatyczna' => 'Automatyczna', 'Manualna' => 'Manualna'), null, ['id' => 'idsegment', 'class'=>'form-control custom-select']) !!}
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
                {!! Form::label('tempomat', "Tempomat:") !!}
                {!! Form::checkbox('tempomat'); !!}
            </div>
    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
