@extends('backend.layout.main')
@section('container')
<div class="container-fluid py-4">
    <div class="row">


        {{-- Tabel --}}
        <div class="col-8 mb-xl-0 mb-4">
            <div class="card p-4">
                <div class="card-header py-0">
                    <div class="row">
                        <div class="col-lg-6 col-7 p-0">
                            <h6>Pemeran</h6>
                            <p class="text-sm mb-0">
                                <span class=" ms-1">Data menurut waktu terbaru</span>
                            </p>
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
                                        <span class=" font-weight-bold"> <a href="/show_pemeran/{{ $s->id_pemeran }}">
                                                Lihat</a> | <a href="#" onclick="konfirmasiHapus({{ $s->id_pemeran }})">Hapus </a></span>
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

        {{-- Form --}}
        <div class="col-4 mb-xl-0 mb-4">
            <div class="card p-4">
                <div class="card-header p-1">
                    <div class="row">
                        <div class="col">
                            <h6>Tambah Data</h6>
                            <p class="text-sm mb-0">
                                <span class=" ms-1">Form tambah data </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form method="POST" action="/store_pemeran" enctype="multipart/form-data">
                        @csrf
                        <label for="Pengarang">Pemeran</label>
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2" placeholder="Masukan Pemeran..."
                                aria-label="Pengarang" name="pemeran">

                            {{-- <input type="number" class="form-control mb-2" placeholder="Masukan Harga..."
                                aria-label="Pengarang" name="harga">

                            <input type="number" class="form-control mb-2" placeholder="Masukan Stok..."
                                aria-label="Pengarang" name="stok">

                            <textarea name="keterangan" class="form-control mb-2" id="" cols="30" rows="10"
                                placeholder="Masukan Keterangan"></textarea>

                            <input type="file" name="gambar" class="form-control mb-2" id=""> --}}
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
 @include('backend.partials.footer')
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
                window.location.href = "{{ url('/destroy_pemeran') }}"+"/"+ id;
            }
          });
    }

</script>
{{-- Konfirmasi Hapus End --}}
@endsection