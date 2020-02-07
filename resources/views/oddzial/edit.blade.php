@extends('layouts.app')

@section('title', 'Edycja oddziala')

@section('content')
            <h1>Edycja oddziala</h1>

    {!! Form::model($oddzial, ['route' => ['oddzial.update', $oddzial], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('miasto', "Miasto:") !!}
        {!! Form::text('miasto', $oddzial->miasto, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ulica', "ulica:") !!}
        {!! Form::text('ulica', $oddzial->ulica, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefon', "Telefon:") !!}
        {!! Form::text('telefon', $oddzial->telefon, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', "Adres email:") !!}
        {!! Form::text('email', $oddzial->email, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
