<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostfun</title>
    @vite('resources/css/style.css')

    <link rel="icon" href="images/icon.png" type="image/x-icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="js/script.js" async></script>
    <script src="https://cdn.jsdelivr.net/gh/rick-liruixin/body-scroll-lock-upgrade@v1.1.0/lib/index.umd.js"></script>
</head>

<!-- bg-[url('/public/images/bg-header.png')] -->

<body>
    <!-- start: Header -->
    <x-users.header></x-users.header>
    <!-- end: Header -->

    <!-- start: Content -->
    {{ $slot }}
    <!-- end: Content -->

    <!-- start: Footer -->
    <x-users.footer></x-users.footer>
    <!-- end: Footer -->

    <!-- Swiper JS-->
    <script src="https://cdn.josetxu.com/js/pure-pajinate.es5.min.js"></script>
</body>

</html>
