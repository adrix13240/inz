@extends('layouts.app')

@section('content')
            <h1>Edycja segmentu</h1>

    {!! Form::model($segment, ['route' => ['segment.update', $segment], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
            <div class="form-group">
                {!! Form::label('nazwa', "Nazwa segmentu:") !!}
                {!! Form::text('nazwa', $segment->nazwa, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('cena', "Cena:") !!}
                {!! Form::text('cena', $segment->cena, ['class'=>'form-control']) !!}
            </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
