@extends('layouts.app')

@section('content')
            <h1>Edycja klienta</h1>

    {!! Form::model($klient, ['route' => ['klients.update', $klient], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('imie', "Imię:") !!}
        {!! Form::text('imie', $klient->imiePierwsze, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nazwisko', "Nazwisko:") !!}
        {!! Form::text('nazwisko', $klient->nazwisko, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pesel', "PESEL:") !!}
        {!! Form::text('pesel', $klient->pesel, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ulica', "Ulica:") !!}
        {!! Form::text('ulica', $klient->ulica, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numerDomu', "Numer domu:") !!}
        {!! Form::text('numerDomu', $klient->numerDomu, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('miejscowosc', "Miejscowość:") !!}
        {!! Form::text('miejscowosc', $klient->miejscowosc, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('kodPocztowy', "Kod pocztowy:") !!}
        {!! Form::text('kodPocztowy', $klient->kodaPocztowy, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('poczta', "Poczta:") !!}
        {!! Form::text('poczta', $klient->poczta, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
