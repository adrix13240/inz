@extends('layouts.app')

@section('title', 'Dodawanie marki')

@section('content')
        <h1>Nowa rezerwacja</h1>

            {!! Form::open(['route' => 'rezerwacja.store']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                {!! Form::label('iduser', "Klient:") !!}
                {!! Form::text('iduser', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('idstatus', "Status:") !!}
                {!! Form::text('idstatus', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idpoczatek', "Początek:") !!}
                {!! Form::text('idpoczatek', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idkoniec', "Klient:") !!}
                {!! Form::text('idkoniec', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('od', "Data od:") !!}
                {!! Form::text('od', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('do', "Data do:") !!}
                {!! Form::text('do', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idsamochod', "Samochód:") !!}
                {!! Form::text('idsamochod', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('idubezpieczenie', "Ubezpieczenie:") !!}
                {!! Form::text('idubezpieczenie', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fotelik', "Fotelik:") !!}
                {!! Form::text('fotelik', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nawigacja', "Nawigacja:") !!}
                {!! Form::text('nawigacja', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
