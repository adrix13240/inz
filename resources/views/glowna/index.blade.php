@extends('layouts.app')

@section('content')
    <div class="col-12">
        <h1>Wyszukaj samochód</h1>

        {!! Form::open(['route' => 'klients.store']) !!}

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="btn btn-danger">{{ $error }}</div>
            @endforeach
        @endif

        <div class="form-group">
            <div class="col-4" >
                <div class="form-group">
{{--                    {!! Form::label('idOddzial', "Miejsce odbioru:") !!}--}}
{{--                    {!! Form::select('idOddzial', $oddzialy , null, ['id'=>'idOddzial', 'class'=>'form-control custom-select']) !!}--}}
                </div>
                <div>
                    <p>Miejsce zwrotu:</p>
                    <select name="nazwa">
                        {{--                @foreach($oddzialFirmy as $oddzial)--}}
                        {{--                    <option>{{$oddzial->miasto}}</option>--}}
                        {{--                @endforeach--}}
                    </select>
                    <input type="datetime-local" name="datetime_local" style="width: 50%;">
                </div>
                <div class="form-group">
                    {!! Form::submit('Sprawdź ofertę', ['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
