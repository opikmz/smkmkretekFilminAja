<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.header')

<body>

    <!-- Navbar start -->
    @include('frontend.partials.navbar')
    <!-- Navbar End -->

    @yield('container')

    <!-- Footer Start -->
    @include('frontend.partials.footer')
    <!-- Footer End -->


    @include('frontend.partials.js')
</body>

</html>
