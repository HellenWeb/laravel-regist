<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>@yield('title')</title>
        <style>
            footer {
                background: whitesmoke;
                height: 70px;
                width: 100%;
                position: absolute;
                bottom: 0;
            }
            a {
                text-decoration: none;
            }
            .footer__inner {
                margin-top: 25px;
                display: flex;
                justify-content: center;
            }
            .footer__inner a {
                color: black;
                text-decoration: none;
            }
            .intro__inner {
                margin: 10% 0;
            }
        </style>
    </head>
    <body>
    
        <!--- Navbar ----->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Registration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('reg') }}">Registration</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <!--- Content --->

        <div class="container">
            @include('inc.message')
            @yield('content')
        </div>

        <!--- Footer --->

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <a>Copyright By. Hellen</a>
                </div>
            </div>
        </footer>

    </body>
</html>