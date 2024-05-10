<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 10 Task List App </title>
    @yield('styles')
</head>

<body>
    <h1>@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        @yield('content')

        {{-- one time created flash message in web.php 'Task created succesfully' --}}
    </div>

</body>


</html>
