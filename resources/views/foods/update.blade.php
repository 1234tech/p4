@extends('layouts.master')

@section('updateForm')

    <h1>Update information</h1>

    <form method="POST" action="/foods/update">
        {{ method_field('put') }}
        {{ csrf_field() }}

        <fieldset>
            <p>* indicates required field</p>
            <label> * Select item</label>
        </fieldset>

        <label>Tags</label>
        @foreach($tags as $tagId => $tagName)
            <ul class="'tags">
                <li>
                    <label>
                        <input {{ (in_array($tagId, $tags)) ? 'checked' : '' }} type="checkbox" name="'tags[]" value="'{{ $tagId }}">{{ $tagName }}
                    </label>
                </li>
            </ul>
         @endforeach
    </form>
@endsection
