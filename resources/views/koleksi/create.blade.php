@extends('mylayouts.main')

@section('container')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card">
                <form action="/koleksi" method="POST">
                    @csrf
                    <input type="hidden" name="profil_depo_id" value="{{ $profil_depo_id }}">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Koleksi</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" placeholder="Nama Kopetensi" required>
                    </div>
                    <select class="form-select" aria-label="Default select example" name="jenis">
                        <option value="bangunan">Bangunan Sekolah</option>
                        <option value="gerbang">Gerbang</option>
                        <option value="fasilitas">Fasilitas</option>
                      </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
