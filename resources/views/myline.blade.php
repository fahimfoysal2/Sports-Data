@extends('layouts.app')

@section('content')

    @foreach($data as $line)
        <x-my-line :myLine="$line"/>
    @endforeach

@endsection
