<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.header')

<body>

    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> --}}
    <!-- Spinner End -->

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