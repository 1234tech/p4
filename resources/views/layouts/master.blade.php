<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>


    <link href="{{asset('css/foods.css')}}" rel="stylesheet"/>
</head>

<body>
<section>
    @yield('intro')
</section>


@if(session('alert'))
    <div class='alert'>
        {{ session('alert') }}
    </div>
@endif

<section>
    @yield('addForm')
    @yield('removeForm')
    @yield('expiredList')
    @yield('updateForm')
</section>


</body>
</html>
