@extends('mylayouts.main')

@section('tambahcss')
    <style>
        /* .row-data .col-3 {
                            max-width: 15.5rem !important;
                        } */

        .card-header h4 {
            font-size: 1.2rem !important
        }

        .input-group-prepend button i {
            position: absolute;
            margin-top: -25px;
        }

    </style>
@endsection

@section('container')
<div class="container-fluid mt-3">
    <!-- Small boxes (Stat box) -->
    <div class="card mb-5">
        <div class="card-header" style="display:flex; background-color: #25b5e9">
            <div class="col-10">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link text-white active font-weight-bold" href="#data-usulan-sekolah" data-toggle="tab">Vasilitasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" href="#tambah-usulan-lahan" data-toggle="tab">Tambah</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.card-header DATA SEKOLAH-->
        <div class="card-body p-0">
            <div class="tab-content p-0">
                <div class="tab-pane active" id="data-usulan-sekolah">
                    <div class="row">
                        <div class="col">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                  <tr>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">No</th>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">Nama Varifikator</th>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">Nama Sekolah</th>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">Keperluan</th>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">Surat Tugas</th>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">Tanggal Visitasi</th>
                                    <th class="col-1 text-center" style="background-color: #eeeeee" scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  {{-- row 1 --}}
                                  <tr>
                                    <th class="col-1 text-center" scope="row">1</th>
                                    <td class="col-1 text-center">ADE ROMLAH</td>
                                    <td class="col-1 text-center">SMKS TARUNA BHAKTI</td>
                                    <td class="col-1 text-center">Memverifikasi bangunan ruang kelas dan ruang praktik</td>
                                    <td class="col-1 text-center"><img src="/img/pdf.png" alt="image" style="width: 30px"></td>
                                    <td class="col-1 text-center">19 - 01 - 2022</td>
                                    <td class="col-1 text-center">
                                        <a class="btn text-white" style="background-color: #00a65b" href="">Edit</a>
                                        <a class="btn text-white" style="background-color: #00a65b" href="">Simpan</a>
                                    </td>
                                  </tr>
                                  {{-- end row 1 --}}
            
                                  {{-- row 2 --}}
                                  <tr>
                                    <th class="col-1 text-center" scope="row">2</th>
                                    <td class="col-1 text-center">AGUS HERMAWAN, S.PD M.SI</td>
                                    <td class="col-1 text-center">SMKS WIRA BUANA 2</td>
                                    <td class="col-1 text-center">Memverifikasi bangunan perpustakaan</td>
                                    <td class="col-1 text-center"><img src="/img/pdf.png" alt="image" style="width: 30px"></td>
                                    <td class="col-1 text-center">24 - 03 - 2022</td>
                                    <td class="col-1 text-center">
                                        <a class="btn text-white" style="background-color: #00a65b" href="">Edit</a>
                                        <a class="btn text-white" style="background-color: #00a65b" href="">Simpan</a>
                                    </td>
                                  </tr>
                                  {{-- end row 2 --}}
            
                                  {{-- row 3 --}}
                                  <tr>
                                    <th class="col-1 text-center" scope="row">3</th>
                                    <td class="col-1 text-center">ASEP SUHENDI, S.PD, MM</td>
                                    <td class="col-1 text-center">SMK SATRIA BANGSA</td>
                                    <td class="col-1 text-center">Memverifikasi bangunan peralatan kejuruan</td>
                                    <td class="col-1 text-center"><img src="/img/pdf.png" alt="image" style="width: 30px"></td>
                                    <td class="col-1 text-center">04 - 05 - 2022</td>
                                    <td class="col-1 text-center">
                                        <a class="btn text-white" style="background-color: #00a65b" href="">Edit</a>
                                        <a class="btn text-white" style="background-color: #00a65b" href="">Simpan</a>
                                    </td>
                                  </tr>
                                  {{-- end row 3 --}}
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>

                <div class="chart tab-pane" id="tambah-usulan-lahan">
                    <div class="card-body">
                        <form action="/usulan-lahan" method="post" enctype="multipart/form-data">
                            {{-- input nama verifikator --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Verifikator</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Masukan Nama Verifikator" id="verifikator" name="verifikator" required>
                            </div>
                            {{-- end input nama verifikator --}}

                            {{-- input nama sekolah --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Sekolah</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Masukan Nama Sekolah" id="sekolah" name="sekolah" required>
                            </div>
                            {{-- end input nama sekolah --}}
                            
                            {{-- input keperluan --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keperluan</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Masukan Keperluan" id="keperluan" name="keperluan" required>
                            </div>
                            {{-- end input keperluan --}}

                            {{-- upload file(pdf) --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label pt-1" for="customFile">Surat Tugas</label>
                                <input type="file" id="chooseFile" accept=".pdf" name="surat-tugas" required>
                            </div>
                            {{-- end upload file(pdf) --}}

                            {{-- input nama tanggal visitasi --}}
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Visitasi</label>
                                <input type="date" class="form-control col-sm-9" placeholder="Masukan Tanggal Visitasi" id="visitasi" name="visitasi" required>
                            </div>
                            {{-- end input nama tanggal visitasi --}}

                            {{-- button simpan --}}
                            <button type="submit" class="btn text-white col-sm-1"
                                style="background-color: #00a65b">Simpan</button>
                            {{-- end button simpan --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->

@endsection
