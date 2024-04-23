@extends('backend.layout.main')
@section('container')
<div class="container-fluid py-4">
    <div class="row">


        {{-- Tabel --}}
        <div class="col-12 mb-xl-0 mb-4">
            <div class="card p-4">
                <div class="card-header py-0">
                    <div class="row">
                        <div class="col-lg-6 col-7 p-0">
                            <h6>Tabel Movie</h6>
                            <p class="text-sm mb-0">
                                <span class=" ms-1">Data menurut waktu terbaru</span>
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="/create_movie">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
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
                                        Judul</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                        Direktur</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                        Studio</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center w-20">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($movie as $s)
                                <tr>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold"> {{ $no++ }} </span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=" font-weight-bold">{{ $s->judul }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=" font-weight-bold">{{ $s->direktur }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=" font-weight-bold">{{ $s->studio }}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class=" font-weight-bold"> <a href="/show_movie/{{ $s->id_movie }}">
                                                Lihat</a> | <a href="#" onclick="konfirmasiHapus({{ $s->id_movie }})">Hapus </a></span>
                                    </td>
                                </tr>
                              
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Table --}}

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
  {{-- Konfirmasi Hapus --}}
  <script>
    function konfirmasiHapus(id){
        Swal.fire({
            title: "Hapus",
            text: "Apakah kamu yakin untuk menghapus data ini",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('/destroy_movie') }}"+"/"+ id;
            }
          });
    }

</script>
{{-- Konfirmasi Hapus End --}}
@endsection