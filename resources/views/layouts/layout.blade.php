<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laraworks/@yield('title')</title>
    <link rel="icon" href={{ asset('/images/logo.png') }}>
    <link rel="stylesheet" href={{ '/css/app.css' }}>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <a class="logo-image" href="/"><img src={{ asset('/images/logo.png') }} alt="logo"></a>
                <a class="logo-text" href="/">Laraworks</a>
            </div>
            <div class="navbar">
                @switch($title)
                    @case('Workers')
                        <a class="inactive" href="/">Home</a>
                        <a class="active" href="/workers">Workers</a>
                        <a class="inactive" href="/about">About</a>
                        @break
                    @case('About')
                        <a class="inactive" href="/">Home</a>
                        <a class="inactive" href="/workers">Workers</a>
                        <a class="active" href="/about">About</a>
                        @break
                    @default
                        <a class="active" href="/">Home</a>
                        <a class="inactive" href="/workers">Workers</a>
                        <a class="inactive" href="/about">About</a>
                @endswitch 
            </div>
        </header>
        <main>
            @yield('main')
        </main>
        <footer>
            <p>Copyright &copy; 2022 | Design by Roman Maxim</p>
            <div class="footer-links">
                <a href="https://www.facebook.com/maxim.roman.18" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/in/maxim-roman-392888253/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://github.com/MaximRoman" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/736804efb5.js" crossorigin="anonymous"></script>
</body>
</html>