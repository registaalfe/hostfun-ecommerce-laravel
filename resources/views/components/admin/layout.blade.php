<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin</title>
    @vite('resources/css/admin.css')

    <link rel="icon" href="/images/icon.png" type="image/x-icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <!-- start: Sidebar -->
    <x-sidebar></x-sidebar>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main id="main-content" class="elementor-top-section min-h-screen transition-all header-expanded">
        <!-- start: Header -->
        <x-header></x-header>
        <!-- end: Header -->

        <!-- start: Content -->
        {{ $slot }}
        <!-- end: Content -->
    </main>
    <!-- end: Main -->

    <!-- JS Libraries -->
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>
    <script script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/createAlert.js') }}"></script>
    <script src="{{ asset('js/editAlert.js') }}"></script>
    <script src="{{ asset('js/deleteAlert.js') }}"></script>

</body>

</html>
