@extends('layouts.app')

@section('title', 'Dodawanie klienta')

@section('content')
        <h1>Nowy klient</h1>

            {!! Form::open(['route' => 'klients.store']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                {!! Form::label('imie', "Imię:") !!}
                {!! Form::text('imie', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nazwisko', "Nazwisko:") !!}
                {!! Form::text('nazwisko', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('pesel', "PESEL:") !!}
                {!! Form::text('pesel', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ulica', "Ulica:") !!}
                {!! Form::text('ulica', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('numerDomu', " Numer Domu:") !!}
                {!! Form::text('numerDomu', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('miejscowosc', "Miejscowość:") !!}
                {!! Form::text('miejscowosc', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('kodPocztowy', "Kod Pocztowy:") !!}
                {!! Form::text('kodPocztowy', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('poczta', "Poczta:") !!}
                {!! Form::text('poczta', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
