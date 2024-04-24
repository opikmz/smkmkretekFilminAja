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
                                    <span class=" ms-1">Form tambah data. Mohon untuk mengisi pemeran terlebih dahulu</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <form method="post" action="/store_movie" enctype="multipart/form-data" >
                            @csrf
                            <label for="Pengarang">Judul</label>
                            <div class="mb-3">
                                <input type="text" class="form-control mb-2" placeholder="Masukan Judul..."
                                    aria-label="Pengarang" name="judul" value="">
                            </div>

                            <label for="Pengarang">Sutradara</label>
                            <select class="selectpicker form-control mb-2" name="id_sutradara" placeholder="Pilih Sutradara"
                                data-live-search="true">
                                <option value="" selected>Pilih Sutradara</option>
                                @foreach ($sutradara as $s)
                                <option value="{{ $s->id_sutradara }}">{{ $s->sutradara }}</option>
                                @endforeach
                            </select>

                            <label for="Pengarang">Tanggal keluar</label>
                            <div class="mb-3">
                                <input type="date" class="form-control mb-2" placeholder="Masukan direktur..."
                                    aria-label="Pengarang" name="tanggal_keluar" value="">
                            </div>

                            <label for="Pengarang">Gambar</label>
                            <div class="mb-3">
                                <input type="file" class="form-control mb-2"
                                    aria-label="Pengarang" name="gambar" value="">
                            </div>

                            <label for="Pengarang">Keterangan</label>
                            <textarea name="keterangan" class="form-control mb-2" id="" cols="30" rows="10"></textarea>

                            <div class="group mb-3">
                                <label for="Pengarang">Pemeran </label><br>
                                <div class="">
                                    @foreach ($pemeranMovie as $p)
                                    @php
                                    $pemeran1 = App\Models\pemeranM::where('id_pemeran', $p->id_pemeran)->first();
                                    @endphp
                                    <a href="" class="btn btn-primary p-2 ">{{ $pemeran1->pemeran }} | <i
                                            class="fas fa-trash"></i> </a>
                                    @endforeach
                                </div>
                            </div>

                            <div class="from-group">
                                <label for="Pengarang">Genre</label>
                                <div class="row">
                                    @foreach ($genre as $g)
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" name="genre[]" type="checkbox" value="{{ $g->id_genre }}"
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
                                    // foreach ($pemeranMovie as $index => $Pm) {
                                    // }
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
    @include('backend.partials.footer')
</div>
<script>
    var select_box_element = document.querySelector('#select_box');

    dselect(select_box_element, {
        search: true
    });

</script>
@endsection
