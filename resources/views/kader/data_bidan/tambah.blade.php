@extends('kader.layout')
@section('conten')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Tambah Bidan</h5>
        <!-- Account -->
        <div class="card-body">
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form id="formAccountSettings" method="POST" action="{{route("data_bidan.store")}}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Nama</label>
                        <input class="form-control" type="text" id="firstName" name="nama" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="text" id="password" name="password" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Jenis Kelamin</label>
                        <select id="country" class="select2 form-select" name="jenis_kelamin">
                            <option value=""><-- Pilih Jenis Kelamin --></option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    {{-- <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Status</label>
                        <select id="country" class="select2 form-select" name="status">
                            <option value=""><-- Pilih Status --></option>
                            <option value="Belum Nikah">Belum Nikah</option>
                            <option value="Sudah Nikah">Sudah Nikah</option>
                        </select>
                    </div> --}}

                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="address" name="no_hp" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <input class="form-control" type="hidden" id="role" name="role" value="bidan" autofocus />
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a href="{{ route('data_bidan.index') }}" class="btn btn-outline-danger">Kembali</a>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
</div>
@endsection
