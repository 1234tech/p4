@extends('layouts.master')

@section('removeForm')

    <h2>Remove a grocery item from your pantry.</h2>

    <p>* indicates required field</p>
    <form method="GET" action="/remove">
        {{ csrf_field() }}
        <fieldset class="outsideBorder">
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' => 'brand'])
                <label> * Brand name
                    <input type="text" name="brand" id="brand" value="{{ old('brand_name') }}">
                </label>
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' => 'item'])
                <label>* Item name
                    <input type="text" name="item" id="item" value="{{ old('item_name') }}">
                </label>
            </fieldset>

            <input type="submit" value="Submit feedback" name="button">
        </fieldset>
    </form>


    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
