<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                <li><a href="{{ route('contact') }}">Contatti</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>
</body>
</html>

<!--Per evitare di ripetere l'header in ogni pagina, ho creato questo file layout.blade che conterrà un header che sarà esteso a tutte le altre pagine-->