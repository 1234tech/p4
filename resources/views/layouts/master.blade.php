<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>


    <link href="{{asset('css/foods.css')}}" rel="stylesheet"/>
</head>

<body>

@if(session('alert'))
    <div class='alert'>
        {{ session('alert') }}
    </div>
@endif

<div class="intro">
<h1>Grocery Expiration Tracker</h1>

<p>
    The purpose of this application is to add grocery items and their expiration dates
    to the database in order to prevent wasting food and money.
</p>
<p>
    By selecting one of these options, you will be able to:
<ul>
    <li><a href="http://p4.loc/foods/add">Add a grocery item</a></li>
    <li><a href="http://p4.loc/foods/remove">Remove a grocery item</a></li>
    <li><a href="http://p4.loc/foods/update">Update information about a grocery item</a></li>
    <li><a href="http://p4.loc/foods/expire">See a list of grocery items that have expired or will expire soon</a></li>
</ul>

</div>

<hr>
<br />
<br />
<br />

<section>
    @yield('addForm')
    @yield('removeForm')
    @yield('expiredList')
</section>


</body>
</html>
