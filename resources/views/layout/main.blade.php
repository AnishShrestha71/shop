<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    @livewireStyles
</head>

<body>
    <nav
        class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">

        <div class="mb-2 sm:mb-0 flex flex-row
        ">
            <div class="h-10 w-10 self-center mr-2">
                <img class="h-10 w-10 self-center" src="{{ asset('image/logo.png') }}" />
            </div>
            <div>
                <a href="/home"
                    class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Shrestha
                    Kirana Stores</a><br>
                <span class="text-xs text-grey-dark"> Pokhara</span>
            </div>
        </div>
        @if (Auth::guard('web')->user())
            <div class="sm:mb-0 self-center">
                <a>{{ Auth::guard('web')->user()->name }}</a>
                <a href="{{ route('user.add') }}"
                    class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Add Item</a>
                <a href="{{ route('user.logout') }}"
                    class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Log Out</a>
            </div>
        @else
            <div class="sm:mb-0 self-center">
                <a href="{{ route('login') }}"
                    class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Log In</a>
                <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Sign Up</a>
            </div>
        @endif
    </nav>
    @yield('content')
    @livewireScripts
</body>

</html>
