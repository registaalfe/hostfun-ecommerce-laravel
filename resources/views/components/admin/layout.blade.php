<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin</title>
    @vite('resources/css/admin.css')

    <!-- Google Font -->
    <link rel="icon" href="/images/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    <!-- start: Sidebar -->
    <x-sidebar></x-sidebar>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main id="main-content" class="elementor-top-section min-h-screen transition-all header-collapsed bg-[#EFF2F4]">
        <!-- start: Header -->
        <x-header></x-header>
        <!-- end: Header -->

        <!-- start: Content -->
        {{ $slot }}
        <!-- end: Content -->
    </main>
    <!-- end: Main -->

    <!-- JS Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>
    <script script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/toggleDropdown.js') }}"></script>

    <!-- start: Script alert category admin page -->
    <script>
        @if (session('added'))
            Swal.fire({
                title: "Success!",
                text: "Successfully added new category.",
                icon: "success",
                draggable: true
            });
        @endif

        function editing(button) {
            event.preventDefault(); // To stop auto submit action button
            Swal.fire({
                title: "Are you sure want to edit?",
                text: "You won't be able to revert this!",
                timer: 3000,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, edit it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    button.parentElement.submit();
                };
            });
        }

        @if (session('edited'))
            Swal.fire({
                title: "{{ session('alert.title') }}",
                text: "{{ session('alert.message') }}",
                icon: "{{ session('alert.type') }}",
                draggable: true
            });
        @endif

        function deleting(button) {
            event.preventDefault(); // To stop auto submit action button
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                timer: 3000,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    button.parentElement.submit();
                };
            });
        }

        @if (session('deleted'))
            Swal.fire({
                title: "{{ session('alert.title') }}",
                text: "{{ session('alert.message') }}",
                icon: "{{ session('alert.type') }}",
                draggable: true
            });
        @endif
    </script>
    <!-- end: Script alert category admin page -->

    <!-- start: script table admin -->
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
    <script>
        let table = new DataTable('table.display');
    </script>
    <!-- end: script table admin -->

    @include('sweetalert::alert')
</body>

</html>
