@extends('layouts.master')

@section('intro')
<div class="intro">
    <h1>Grocery Expiration Tracker</h1>

    <p>
        The purpose of this application is to add grocery items and their expiration dates
        to the database in order to prevent wasting food and money.
    </p>
    <p>
        By selecting one of these options, you will be able to:
    <ul>
        <li><a href="foods/add">Add a grocery item</a></li>
        <li><a href="foods/remove">Remove a grocery item</a></li>
        <li><a href="foods/update">Update information about a grocery item</a></li>
        <li><a href="foods/expire">See a list of grocery items that have expired or will expire soon</a></li>
    </ul>
    </p>
</div>

@endsection
