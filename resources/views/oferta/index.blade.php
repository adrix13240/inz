@extends('layouts.app')

@section('content')
    <div class="form-group" style="width:80%; margin:auto" align="center" >
    <h1>Lista wszystkich samochodów</h1>
    <table class="table table-hover">

        @foreach($samochods as $samochods)
            @if($samochods->zarezerwowany === 0)
            <tr>
                <td>
                    <h3>{{$samochods->marka->nazwa.' '.$samochods->model}}</h3>
                    <h5>{{$samochods->segment->nazwa}}</h5>
                    <img src="/images/{{$samochods->marka->nazwa.'-'.$samochods->model}}.jpg" width="275px" style="border-radius: 15px;">
                </td>
                <td>
                    <h5>{{$samochods->oddzial->miasto.' ul.'.$samochods->oddzial->ulica}}</h5><br><br>
                    Kolor: {{$samochods->kolor}}<br>
                    Skrzynia: {{$samochods->skrzynia}}<br>
                    Paliwo: {{$samochods->paliwo}}<br>
                    @if ($samochods->tempomat === 1)
                        Tempomat: Posiada
                    @endif
                </td>
                <td><br><br><br>
                    Liczba miejsc: {{$samochods->miejsca}}<br>
                    @if ($samochods->zamek === 1)
                        Centralny zamek: Posiada
                    @endif<br>
                    @if ($samochods->klimatyzacja === 1)
                        Klimatyzacja: Posiada
                    @endif
                </td>
                <td><br><br><br><a class="btn btn-info" href="{{route('rezerwacja.create.samochod', $samochods)}}">Zarezerwuj</a></td>
            </tr>
        @endif
            {!! Form::close() !!}
        @endforeach
    </table>

    </div>
@endsection
