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
            {!! Form::hidden('iduser', Auth::user()->id, ['class'=>'form-control custom-select']) !!}
            <div class="form-group">
                {!! Form::label('od', "Data od:") !!}
                {!! Form::date('od', \Carbon\Carbon::now()->startOfDay(),  ['class'=>'form-control']) !!}
            </div>
{{--            {!! Form::hidden('idsamochod', $samochody->id, ['class'=>'form-control custom-select']) !!}--}}
            <div class="form-group">
                {!! Form::label('idubezpieczenie', "Ubezpieczenie:") !!}
                {!! Form::select('idubezpieczenie', $ubezpieczenia, null, ['id' => 'idubezpieczenie', 'class'=>'form-control custom-select']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('fotelik', "Fotelik:") !!}
                {!! Form::checkbox('fotelik', '1'); !!}
            </div>
            <div class="form-group">
                {!! Form::label('nawigacja', "Nawigacja:") !!}
                {!! Form::checkbox('nawigacja', '1'); !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>


    {!! Form::close() !!}

@endsection
