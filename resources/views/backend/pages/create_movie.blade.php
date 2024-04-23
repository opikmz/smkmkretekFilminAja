@extends('backend.layout.main')
@section('container')
<div class="container-fluid py-4">
    <div class="" style="min-height:80vh;">
        <div class="row">

            <div class="col-lg-7 mb-xl-0 mb-4">
                <div class="card p-4">
                    <div class="card-header p-1">
                        <div class="row">
                            <div class="col">
                                <h6>Tambah Data</h6>
                                <p class="text-sm mb-0">
                                    <span class=" ms-1">Form tambah data</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <form method="POST" action="/store_movie">
                            @csrf
                            <label for="Pengarang">Judul</label>
                            <div class="mb-3">
                                <input type="text" class="form-control mb-2" placeholder="Masukan Judul..."
                                    aria-label="Pengarang" name="genre" value="">
                            </div>

                            <label for="Pengarang">Direktur</label>
                            <div class="mb-3">
                                <input type="text" class="form-control mb-2" placeholder="Masukan direktur..."
                                    aria-label="Pengarang" name="direktur" value="">
                            </div>

                            <label for="Pengarang">Studio</label>
                            <select class="selectpicker form-control mb-2" name="id_studio" placeholder="Pilih Studio"
                                data-live-search="true">
                                <option value="" selected>Pilih Studio</option>
                                @foreach ($studio as $s)
                                <option value="{{ $s->id_studio }}">{{ $s->studio }}</option>
                                @endforeach
                            </select>
                            <label for="Pengarang">Gambar</label>
                            <div class="mb-3">
                                <input type="file" class="form-control mb-2" placeholder="Masukan direktur..."
                                    aria-label="Pengarang" name="gambar" value="">
                            </div>

                            <div class="group mb-3">
                                <label for="Pengarang">Pemeran </label><br>
                                <div class="">
                                    @foreach ($pemeranMovie as $p)
                                    @php
                                    $pemeran1 = App\Models\pemeranM::where('id_pemeran', $p->id_pemeran)->first();
                                    @endphp
                                    <a href="" class="btn btn-primary p-2 ">{{ $pemeran1->pemeran }}</a>
                                    @endforeach
                                </div>
                            </div>

                            <div class="from-group">
                                <label for="Pengarang">Genre</label>
                                <div class="row">
                                    @foreach ($genre as $g)
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $g->id_genre }}"
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $g->genre }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-xl-0 mb-4">
                <div class="card p-4">
                    <div class="card-header py-0">
                        <div class="row">
                            <div class="col-lg-6 col-7 p-0">
                                <h6>Pemeran</h6>
                                <p class="text-sm mb-0">
                                    <span class=" ms-0">Data menurut waktu terbaru</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center w-10">
                                            No
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            Pemeran</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center w-20">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($pemeran as $s)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> {{ $no++ }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class=" font-weight-bold">{{ $s->pemeran }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class=" font-weight-bold"> <a
                                                    href="/tambah_pemeran_movie/{{ $s->id_pemeran }}">Tambah</a></span>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
<script>
    var select_box_element = document.querySelector('#select_box');

    dselect(select_box_element, {
        search: true
    });

</script>
@endsection
