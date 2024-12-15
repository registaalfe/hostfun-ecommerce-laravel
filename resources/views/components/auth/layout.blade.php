<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/auth.css')
    <link rel="icon" href="/images/icon.png" type="image/x-icon">

</head>

<body>
    <!-- start: Main -->
    <main class="elementor-top-section min-h-screen transition-all header-expanded bg-[#F2F6FF]">

        <!-- start: Content -->
        {{ $slot }}
        <!-- end: Content -->

    </main>
    <!-- end: Main -->

    @include('sweetalert::alert')

</body>


</html>
