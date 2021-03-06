<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty | 2</title>
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href={{route('home')}} class="p-4">Home</a>
            </li>
            <li>
                <a href={{route('dashboard')}} class="p-4">Dashboard</a>
            </li>
            <li>
                <a href={{route('posts')}} class="p-4">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
            <li>
            <a href={{route('home')}} class="p-4">{{auth()->user()->username}}</a>
            </li>
            <form action={{route('logout')}} action="post">
                @csrf
                <button class="p-4">Logout</button>
            </form>
            @endauth
            @guest
                <li>
                    <a href={{route('login')}} class="p-4">Login</a>
                </li>
                <li>
                    <a href={{ route('register')}} class="p-4">Register</a>
                </li>
            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>