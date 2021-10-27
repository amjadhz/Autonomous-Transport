<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Showcase - Personal Portfolio One Page Bulma Theme</title>
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
    <script
            src="https://kit.fontawesome.com/2828f7885a.js"
            integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
            crossorigin="anonymous"
    ></script>
    <link rel="icon" type="image/png" href="favicon.png"/>
</head>

>>>>>>> develop
<body>
@yield('content')

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
    AOS.init({
        easing: "ease-out",
        duration: 800,
    });
</script>
</body>
<<<<<<< HEAD

<footer>

</footer>


=======
</html>
>>>>>>> develop
