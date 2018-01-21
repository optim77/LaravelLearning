<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link href="{{  URL::asset('css/app.css') }}" >
</head>
<body>

<div class="container-fluid ">
    <div class="container">
        <nav class="navbar  navbar-collapse navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a class="navbar-brand  text-uppercase lead text-danger h1" href="">Laravel</a>
                    <a class="nav-item nav-link mx-2 lead text-danger px-3 hv" href="">Top</a>
                    <a class="nav-item nav-link mx-2 lead text-danger px-3 hv" href="/contact">Contact</a>
                    <a class="nav-item nav-link mx-2 lead text-danger px-3 hv" href="/about">About</a>
                    <a class="nav-item nav-link mx-2 lead text-danger px-3 hv" href="{{url('login')}}">Login</a>
                    <a class="nav-item nav-link mx-2 lead text-danger px-3 hv" href="{{url('register')}}">Register</a>

                </div>
            </div>
        </nav>
    </div>
</div>

    <div class="container">

        @yield('content')

    </div>

<footer>
    <div class="container-fluid  p-2 ">
        <p class="text-center lead text-danger">MEMES 2018 &copy; All rights reserved</p>
    </div>
</footer>

</body>
</html>