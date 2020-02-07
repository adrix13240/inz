@extends('layouts.app')

@section('content')
            <h1>Edycja marki</h1>

    {!! Form::model($rezerwacja, ['route' => ['rezerwacja.update', $rezerwacja], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
            <div class="form-group">
                {!! Form::label('iduser', "Klient:") !!}
                {!! Form::text('iduser', $rezerwacja->iduser, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('idstatus', "Status:") !!}
                {!! Form::text('idstatus', $rezerwacja->idstatus, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idpoczatek', "Początek:") !!}
                {!! Form::text('idpoczatek', $rezerwacja->idpoczatek, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idkoniec', "Klient:") !!}
                {!! Form::text('idkoniec', $rezerwacja->idkoniec, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('od', "Data od:") !!}
                {!! Form::text('od', $rezerwacja->od, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('do', "Data do:") !!}
                {!! Form::text('do', $rezerwacja->do, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idsamochod', "Samochód:") !!}
                {!! Form::text('idsamochod', $rezerwacja->idsamochod, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idubezpieczenie', "Ubezpieczenie:") !!}
                {!! Form::text('idubezpieczenie', $rezerwacja->idubezpieczenie, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fotelik', "Fotelik:") !!}
                {!! Form::text('fotelik', $rezerwacja->fotelik, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nawigacja', "Nawigacja:") !!}
                {!! Form::text('nawigacja', $rezerwacja->nawigacja, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
