<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts - Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm">
<header class="flex items-center justify-between" px-8 py-4>
    <a href=""><img src="{{asset('img/logo.svg')}}" alt="logo"></a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <a href="">
        <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94" alt=""
             class="w-10 h-10 rounded-full">
    </a>
</header>

<main class="container mx-auto max-w-custom flex">
    <div class="w-70 mr-5">
        Add idea form goes here Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis cumque
        dignissimos dolorum earum est et eum expedita harum, hic, inventore magnam maiores modi natus officiis quas,
        quasi tempora temporibus ullam ut! Necessitatibus neque nobis officia repellendus similique? Aliquid assumenda
        eius laudantium natus nulla quas quia ut. Ab doloribus esse est ex excepturi id inventore laboriosam, maiores
        molestias nostrum, saepe vel, vero. Culpa dolorem, explicabo inventore magni molestiae perferendis quae qui! Ad
        atque blanditiis corporis cumque dolore doloremque dolorum earum excepturi, ipsum itaque, libero nesciunt nobis
        obcaecati quasi quis reiciendis similique soluta tempore. Incidunt iste repudiandae voluptates voluptatum?
        Aspernatur, incidunt!
    </div>
    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                        (6)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                        Progress (1)</a></li>
            </ul>

            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                        (10)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                        (55)</a></li>

            </ul>
        </nav>

        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>
</body>
</html>
