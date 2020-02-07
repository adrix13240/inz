@extends('layouts.app')

@section('title', 'Nowa marka')

@section('content')
        <h1>Nowa marka</h1>

            {!! Form::open(['route' => 'marka.store']) !!}

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="btn btn-danger">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                {!! Form::label('nazwa', "Nazwa marki:") !!}
                {!! Form::text('nazwa', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
            </div>

    {!! Form::close() !!}

@endsection
