@extends('layouts.app')

@section('content')
            <h1>Edycja marki</h1>

    {!! Form::model($terminRezerwacji, ['route' => ['terminRezerwacji.update', $terminRezerwacji], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
            <div class="form-group">
                {!! Form::label('idsamochod', "Samochód:") !!}
                {!! Form::text('idsamochod', $terminRezerwacji->idsamochod, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('od', "Data od:") !!}
                {!! Form::text('od', $terminRezerwacji->od, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('do', "Data do:") !!}
                {!! Form::text('do', $terminRezerwacji->do, ['class'=>'form-control']) !!}
            </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
