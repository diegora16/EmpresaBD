<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="fondo">

<section class="container mx-auto">
    
    @include('menu_superior')

    <div class="mt-10 md:mx-20 text-left text-white">
        @yield('content')
    </div>

</section>



    




    
    
</body>
</html>