<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Tutory' }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <nav class="header__nav">
            <div class="header__logo">
                <h4>Tutory</h4>
            </div>
            <ul class="header__menu">
                <li>
                    <input type="text" placeholder="Search for lessons">
                </li>
               <li>
                    <a href="categories">Categories</a>
                </li>
                <li>
                    <a href="my-learning">My Learning</a>
                </li>
                <li>
                    <a href="favorites">Favorites</a>
                </li>
                <li>
                    <a href="">Orapeleng</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>