@extends('layouts.master')

@section('expiredList')

    <h1>Food Expiration</h1>

    <h2>These grocery items will expire by the end of 2018.</h2>

    @foreach($expiration2018 as $item)
        {{ $expiration2018 }}
        @endforeach

@endsection
