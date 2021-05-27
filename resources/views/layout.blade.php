<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet"/>

    @yield('head')
</head>

<body>

    <div class="navbar">
        <a href="/">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Products <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="/beers">Beer</a>
                <a href="/wines">Wine</a>
                <a href="/spirits">Spirits</a>
            </div>
        </div>
        <a href="#contact">Contact</a>
    </div>

    @yield('content')
</body>

<footer>
    <div style="margin: 5%; color: #1a202c" id="shadow">
        <p font-weight: 400;>
            Contact me:<br /><br /><a href="mailto:sche0177@hz.nl">Send email</a>
        </p>
    </div>
</footer>
</html>
