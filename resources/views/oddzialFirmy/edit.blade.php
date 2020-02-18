@extends('layouts.app')

@section('title', 'Edycja oddzialFirmya')

@section('content')
            <h1>Edycja oddzialFirmya</h1>

    {!! Form::model($oddzialFirmy, ['route' => ['oddzialFirmys.update', $oddzialFirmy], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('imie', "Imię:") !!}
        {!! Form::text('imie', $oddzialFirmy->imiePierwsze, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nazwisko', "Nazwisko:") !!}
        {!! Form::text('nazwisko', $oddzialFirmy->nazwisko, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pesel', "PESEL:") !!}
        {!! Form::text('pesel', $oddzialFirmy->pesel, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ulica', "Ulica:") !!}
        {!! Form::text('ulica', $oddzialFirmy->ulica, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numerDomu', "Numer domu:") !!}
        {!! Form::text('numerDomu', $oddzialFirmy->numerDomu, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('miejscowosc', "Miejscowość:") !!}
        {!! Form::text('miejscowosc', $oddzialFirmy->miejscowosc, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('kodPocztowy', "Kod pocztowy:") !!}
        {!! Form::text('kodPocztowy', $oddzialFirmy->kodaPocztowy, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('poczta', "Poczta:") !!}
        {!! Form::text('poczta', $oddzialFirmy->poczta, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
