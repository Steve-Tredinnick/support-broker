<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('partials.navbar')
        @include('partials.sidebar')
        @include('partials.content')
        @include('partials.control_sidebar')
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>
