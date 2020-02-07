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
                {!! Form::text('idmarka', $samochod->idmarka, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('model', "Model:") !!}
                {!! Form::text('model', $samochod->model, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('idsegment', "Segment:") !!}
                {!! Form::text('idsegment', $samochod->idesgment, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('skrzynia', "Skrzynia biegów:") !!}
                {!! Form::text('skrzynia', $samochod->skrzynia, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kolor', "Kolor:") !!}
                {!! Form::text('kolor', $samochod->kolor, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tempomat', "Tempomat:") !!}
                {!! Form::text('tempomat', $samochod->tempomat, ['class'=>'form-control']) !!}
            </div>
    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
