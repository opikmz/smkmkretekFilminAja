@extends('frontend.layout.main')
@section('container')

<!-- Hero Start -->
<div class="container-fluid contact py-5 mt-5">
    <div class="container py-5">
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                <div class="col-12">
                    <div class="text-center mx-auto" style="max-width: 700px;">
                        <h1 class="text-primary">Registrasi</h1>
                        <p class="mb-4">Isilah formulir berikut ini <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <div class="h-100 rounded">
                        <iframe class="rounded w-100" style="height: 400px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> --}}
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-12" style="">
                        <form action="/store_register" class="mb-4" method="POST">
                            @csrf
                            <input type="text" name="nickname" class=" form-control border-0 py-3 mb-4" placeholder="Masukan Nama">
                            <input type="email" name="email" class="w-100 form-control border-0 py-3 mb-4"
                                placeholder="Masukan Email">
                            <input type="password" name="password" class="w-100 form-control border-0 py-3 mb-4"
                                placeholder="Masukan Password">
                            {{-- <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10"
                                placeholder="Your Message"></textarea> --}}
                            <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit">Submit</button>
                        </form>
                        <a href="/login" class="">Sudah memiliki akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

@endsection