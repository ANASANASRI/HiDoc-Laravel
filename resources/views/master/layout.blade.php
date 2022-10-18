<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/clayout.css">
    @yield('style')
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    
</head>
<body>
<nav >
    <div id="navbar" class="shadow-xl">
        <img src="" alt="HiDoc">
        <div>
        <a href="./" id="nlink">homme</a>    
        <a href="./profile"  id="nlink">Profile</a>
        <a href="./signin"  id="nlink">signin</a>    
        <a href="./signup" >signup</a>
        </div>
        <a href="./contact" class="button">contact us</a>
    </div>
</nav>
    <br>
    @yield('body')

</body>
</html>