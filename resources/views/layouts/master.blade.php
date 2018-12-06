<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>


    <link href="{{asset('css/foods.css')}}" rel="stylesheet"/>

<body>

@if(session('alert'))
    <div class='alert'>
        {{ session('alert') }}
    </div>
@endif

<h1>Grocery Inventory</h1>
<section>
    @yield('addForm')
    @yield('removeForm')
    @yield('expiredList')
</section>


</body>
</html>
