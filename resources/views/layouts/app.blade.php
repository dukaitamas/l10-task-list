<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel 10 Task List App </title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- cdn: content delivery network , distributed network of servers -reduces latency --}}
  {{-- blade formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium text-slate-600
            shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
        }

        .link{
            @apply font-medium text-gray-700 underline decoration-pink-500
        }
    </style>
  {{-- blade formatter extension disabled only for this style file --}}
  {{-- blade formatter-enable --}}

    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    {{-- mx-auto is a horizontally centered element --}}
    {{-- mt-10 margin-top 10px, max-w-lg max width 32 rem or 512px --}}
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        @yield('content')

        {{-- one time created flash message in web.php 'Task created succesfully' --}}
    </div>

</body>


</html>
