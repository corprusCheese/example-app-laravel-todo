<html lang="RU">
<head>
    @include('include.head')
</head>
<body>

@include('include.header')

<div class="container">
    <div class="row" style="height: 10%"></div>
    @yield('content')
    <div class="row" style="height: 10%"></div>
</div>

@include('include.footer')
</body>
</html>
