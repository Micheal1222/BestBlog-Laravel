<!DOCTYPE html>
<html lang="en">
<head>
   
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME', 'BestBelog')}}</title>
</head>
<body>
    @include('includes.navbar')
    @include('includes.messages')
    @yield('content');
</body>
</html>