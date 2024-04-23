<!DOCTYPE html>
<html lang="en">

@include('backend.partials.header')

<body class="g-sidenav-show  bg-gray-100">

    @include('backend.partials.sidebar')

    <main class="main-content  ">
        {{-- Tambahan = max-height-vh-100 h-100 border-radius-lg --}}

        @include('backend.partials.navbar')

        @yield('container')

    </main>

    @include('backend.partials.js')
    @include('sweetalert::alert')

</body>

</html>
