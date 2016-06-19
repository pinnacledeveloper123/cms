@extends('layouts.master')

@section('content')
    
    View All Goes here <br>

    @if (count($person))
        <ul>

            @foreach($person as $people)
                <li>{{$people}}</li>
            @endforeach
        </ul>

    @endif

@stop