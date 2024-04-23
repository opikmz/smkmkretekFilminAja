@extends('backend.layout.main')
@section('container')
<div class="container-fluid py-4">
    <div class="" style="min-height:80vh;">
        <div class="row">
            {{-- Tabel --}}
            <div class="col-lg-8 mb-xl-0 mb-4">
                <div class="card p-2">
                    <div class="card-body px-0 ">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 center d-flex justify-content-center align-items-center">
                                <h3 class="font-weight-bolder">{{ $genre->genre }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-1 d-flex justify-content-end align-items-end">
                        <div class="px-2 "><a href="/destroy_studio/{{ $genre->id }}" class="text-danger font-weight-bold"> Hapus</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-xl-0 mb-4">
                <div class="card p-4">
                    <div class="card-header p-1">
                        <div class="row">
                            <div class="col">
                                <h6>Edit</h6>
                                <p class="text-sm mb-0">
                                    <span class=" ms-1">Form ubah data</span> 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <form method="POST" action="/update_genre/{{ $genre->id_genre }}" >
                            @csrf
                            <label for="Pengarang">Genre</label>
                            <div class="mb-3">
                                <input type="text" class="form-control mb-2" placeholder="Masukan Genre..."
                                    aria-label="Pengarang" name="genre" value="{{ $genre->genre }}">
                            </div>
    
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection