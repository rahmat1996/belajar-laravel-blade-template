<html>

<head>
    <title>Nama Aplikasi - @yield('title')</title>
</head>

<body>
    {{-- @yield('header') --}}
    {{-- @yield('content') --}}

    {{-- using @section and @show can give default value for section template. it cannot using @yield --}}
    @section('header')
        <h1>Default Header</h1>
    @show

    @section('content')
        <p>Default Content</p>
    @show
</body>

</html>
