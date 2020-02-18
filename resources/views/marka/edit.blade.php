@extends('layouts.app')

@section('content')
    <div class="form-group" style="width:80%; margin:auto" align="center">
            <h1>Edycja marki</h1>

    {!! Form::model($marka, ['route' => ['marka.update', $marka], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('nazwa', "Nazwa marki:") !!}
        {!! Form::text('nazwa', $marka->imiePierwsze, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
