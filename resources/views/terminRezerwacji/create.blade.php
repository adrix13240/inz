@extends('layouts.app')

@section('title', 'Dodawanie marki')

@section('content')
        <h1>Nowy terminRezerwacji</h1>

            {!! Form::open(['route' => 'terminRezerwacji.store']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                {!! Form::label('idsamochod', "Samochód:") !!}
                {!! Form::text('idsamochod', null, ['class'=>'form-control']) !!}
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
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
