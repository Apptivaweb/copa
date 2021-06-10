@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$campeonato->nombre}}</h1>
    <img src="/img/campeonato/{{$campeonato->urlfoto}}" alt="{{$campeonato->nombre}}" title="{{$campeonato->nombre}}">
    <h2>EQUIPOS QUE PARTICIPAN</h2>
    @foreach ($campeonato->equipos as $item)
        <div>
            <h4><a href="/copa-america/{{$item->slug}}">{{$item->nombre}}</a></h4>
            <p>{{$item->title}}</p>
        </div>
    @endforeach
    @forelse ($campeonato->calendarios as $i)
        <p>{{$i->equipos1->nombre}} VS {{$i->equipos2->nombre}}</p>
    @empty
        
    @endforelse
    
</div>
@endsection
