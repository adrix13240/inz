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
                {!! Form::label('skrzynia', "Skrzynia biegów:") !!}
                {!! Form::text('skrzynia', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kolor', "Kolor:") !!}
                {!! Form::text('kolor', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tempomat', "Tempomat:") !!}
                {!! Form::text('tempomat', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
