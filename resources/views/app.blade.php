<html>
<head>
    <meta charset="UTF-8"/>
    <title>@yield('title', 'Home Page')</title>
    <style>
        body {
            background-image: url('backgroud.png');
        }
    </style>
</head>
<body>
<img src="{{URL::to('doge.png')}}" width="550" height="300" alt=""/><br/>
@include('header')
@yield('creepytown_contents')
@include('footer')
</body>
</html>