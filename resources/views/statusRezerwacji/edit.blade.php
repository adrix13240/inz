@extends('layouts.app')

@section('content')
            <h1>Edycja marki</h1>

    {!! Form::model($statusRezerwacji, ['route' => ['statusRezerwacji.update', $statusRezerwacji], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('nazwa', "Nazwa marki:") !!}
        {!! Form::text('nazwa', $statusRezerwacji->nazwa, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection
