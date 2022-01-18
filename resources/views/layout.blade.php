<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Autonomous Transport Challenge</title>
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    <script
        src="https://kit.fontawesome.com/2828f7885a.js"
        integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
        crossorigin="anonymous"
    ></script>
    <link rel="icon" type="image/png" href="favicon.png"/>
</head>
<body>
@yield('content')

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/app.js"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
<script>

    function findDeviceType(){
        const ua = navigator.userAgent;
        if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
            console.log("mobile");
            return false;
        } else {
            console.log("pc");
            return true;
        }
    }

    bulmaCarousel.attach('#carousel-demo', {
        slidesToScroll: 1,
        slidesToShow: 1,
        navigation:findDeviceType(),
        autoplay: true,
        autoplaySpeed: 5000,
        infinite: true,
        breakpoints: [{
            changePoint: 480,
            slidesToShow: 1,
            slidesToScroll: 1
        }
            , {
            changePoint: 640,
            slidesToShow: 1,
            slidesToScroll: 1
        }, {
            changePoint: 768,
            slidesToShow: 1,
            slidesToScroll: 1
        }]

    });
</script>

<script>
    AOS.init({
        easing: "ease-out",
        duration: 800,
    });
</script>
</body>


</html>

