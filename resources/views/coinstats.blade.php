@extends('layouts.main')

@section('main-content')
    @foreach ($coin as $item)
        <p>{{ $item['crypto'] }}</p>
        <p>{{ $item['estimate'] }}</p>
        <p>{{ $item['symbol'] }}</p>
    @endforeach
@endsection