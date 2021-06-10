<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo"><a href="/" title="calculadora Copa América">SIMULADORES</a></div>
        <div class="menu" id="menu">
            <a href="/copa-america">COPA AMÉRICA</a>
            <a href="">ELIMINATORIAS COMMEBOL</a>
            <a href="">NOTICIAS</a>
        </div>
        <div class="hamburguesa"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg></span></div>
    </nav>
@yield('content')

<style>
     :root{
            --text-link: yellowgreen
        }
        body{margin: 0; font-family: Nunito, 'Courier New', Courier, monospace}
        nav{
            display: grid;
            grid-template-columns: auto 3fr auto;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: green;
        }
        .logo a{ color: var(--text-link); font-size: 25px; text-decoration: none;}
        .menu{text-align: center;}
        .menu a{ padding: 0 20px; color:  var(--text-link); text-decoration: none;}
        .hamburguesa { text-align: right; color: var(--text-link);}
        @media screen and (max-width:768px) {
            nav{}
            .logo{ order: 1;  }
            .menu{ order: 3; width: 100%; display: flex; flex-direction: column; position: fixed;
    justify-content: start; top: 50px; left: 0; height: 100vh; transform: translate(-100%); color: wheat; background: green; }
            .hamburguesa{ order: 2;  }
        }
</style>
</body>
</html>
