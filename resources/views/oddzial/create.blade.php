@extends('layouts.app')

@section('title', 'Dodawanie oddziala')

@section('content')
        <h1>Nowy oddzial</h1>

            {!! Form::open(['route' => 'oddzial.store']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                {!! Form::label('miasto', "Miasto:") !!}
                {!! Form::text('miasto', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('ulica', "ulica:") !!}
                {!! Form::text('ulica', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('telefon', "Telefon:") !!}
                {!! Form::text('telefon', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', "Adres email:") !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
