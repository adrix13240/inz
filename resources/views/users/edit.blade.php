@extends('layouts.app')

@section('title', 'Edycja danych')

@section('content')
    <h1>Edycja danych</h1>

    {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('imie', "Imię:") !!}
        {!! Form::text('imie', $user->imie, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nazwisko', "Nazwisko:") !!}
        {!! Form::text('nazwisko', $user->nazwisko, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('adres', "Adres:") !!}
        {!! Form::text('adres', $user->adres, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
