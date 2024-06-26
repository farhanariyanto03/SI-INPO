@extends('kader.layout')
@section('conten')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Tambah Data Lansia</h5>
        <!-- Account -->
        <div class="card-body">
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form id="formAccountSettings" method="POST" action="{{ route('data_lansia.store') }}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">NIK</label>
                        <input class="form-control" type="text" id="firstName" name="NIK" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Nama Pasien</label>
                        <input class="form-control" type="text" id="firstName" name="nama" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Jenis Kelamin</label>
                        <select id="country" class="select2 form-select" name="jenis_kelamin">
                            <option value=""><-- Pilih Jenis Kelamin --></option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Alamat</label>
                        <div class="input-group input-group-merge">
                            <input type="text" name="alamat" class="form-control"/>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="address" name="no_hp" />
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a href="{{ route('data_lansia.index') }}" class="btn btn-outline-danger">Kembali</a>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
</div>
@endsection
