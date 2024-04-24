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
                                <h3 class="font-weight-bolder">{{ $pemeran->pemeran }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-1 d-flex justify-content-end align-items-end">
                        <div class="px-2 "><a href="" onclick="konfirmasiHapus({{ $pemeran->id_pemeran }})" class="text-danger font-weight-bold"> Hapus</a></div>
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
                        <form method="POST" action="/update_pemeran/{{ $pemeran->id_pemeran }}" >
                            @csrf
                            <label for="Pengarang">Pemeran</label>
                            <div class="mb-3">
                                <input type="text" class="form-control mb-2" placeholder="Masukan Pemeran..."
                                    aria-label="Pengarang" name="pemeran" value="{{ $pemeran->pemeran }}">
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
   @include('backend.partials.footer')
</div>
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
@endsection