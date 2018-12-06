@extends('layouts.master')

@section('addForm')


    <p>Add a grocery item to your pantry.</p>

    <p>* indicates required field</p>
    <form method="GET" action="/add">
        {{ csrf_field() }}
        <fieldset class="outsideBorder">
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' => 'brand_name'])
                <label> * Brand name
                    <input type="text" name="brand_name" id="brand_name" value="{{ old('brand_name') }}">
                </label>
            </fieldset>
            <fieldset class="insideBorder">
                @include('foods.field-validation', ['field' => 'item_name'])
                <label>* Item name
                    <input type="text" name="item_name" id="item_name" value="{{ old('item_name') }}">
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
