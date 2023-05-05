<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Company</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
    <nav class="navbar  px-2">
        <div class="text-white"><a href="#home"></a>Company Listing</div>
        <div class="">
            <span class="bar"></span>
        </div>
        <ul class="menu text-white">
            @auth
            <li class="item"><p>Welcome : {{auth()->user()->name}}</p></li>
            <li class="item"><a href="/users/manage">Manage</a></li>
            <li class="item">
                <form method="post" action="/users/logout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @else
            <li class="item"><a href="/users/create">Register</a></li>
            <li class="item"><a href="/users/login">Login</a></li>
            @endauth
            {{-- <li class="item"><a href="#home"></a></li>
            <li class="item"><a href="#home"></a></li> --}}
        </ul>
    </nav>
    <h1 class="text-3xl font-bold underline">Header</h1>
    @include('partials._hero')
    @yield('content')


</body>
</html>
