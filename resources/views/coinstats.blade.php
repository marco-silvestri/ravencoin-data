@extends('layouts.main')

@section('main-content')
        @foreach ($coin as $item)
            <h3 class="display-3">{{ $item['crypto'] }}</h3>
            <h2 class="display-2">{{ $item['estimate'] }}</h2>
            <h3 class="display-3">{{ $item['symbol'] }}</h3>
        @endforeach
@endsection