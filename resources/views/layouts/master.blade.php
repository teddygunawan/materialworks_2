<html>

<head>
    <title>Davis Materialworks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('Header')
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/app.css">
</head>


<body>
    <div class="container">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </div>

    <script src="{{asset('/js/app.js')}}"></script>

    @yield('custom-script')
</body>

</html>