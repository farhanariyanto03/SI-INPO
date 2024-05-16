@extends('kader.layout')

@section('conten')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Edit Data Lansia</h5>
        <!-- Account -->
        <div class="card-body">
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form id="formAccountSettings" method="POST" action="{{ route('data_lansia.update', $data->NIK) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="NIK" class="form-label">NIK</label>
                        <input class="form-control" type="text" id="NIK" name="NIK" value="{{ $data->NIK }}" readonly />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="nama" class="form-label">Nama Pasien</label>
                        <input class="form-control" type="text" id="nama" name="nama" value="{{ $data->nama }}" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="select2 form-select" name="jenis_kelamin">
                            <option value=""><-- Pilih Jenis Kelamin --></option>
                            <option value="Laki - Laki" {{ $data->jenis_kelamin == "Laki - Laki" ? 'selected' : ''}}>Laki - Laki</option>
                            <option value="Perempuan" {{ $data->jenis_kelamin == "Perempuan" ? 'selected' : ''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="alamat">Alamat</label>
                        <div class="input-group input-group-merge">
                            <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}"/>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="status_kesehatan" class="form-label">Status Kesehatan</label>
                        <input type="text" class="form-control" id="status_kesehatan" name="status_kesehatan" value="{{ $data->status_kesehatan }}" />
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
