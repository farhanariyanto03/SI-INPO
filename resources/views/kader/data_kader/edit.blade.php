@extends('kader.layout')
@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Edit Kader</h5>
            <div class="card-body"></div>
            <hr class="my-0" />
            <div class="card-body">
                <form id="formAccountSettings" method="POST" action="{{ route('data_kader.update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="Nama pasien" class="form-label">Nama pasien</label>
                            <input class="form-control" type="text" id="Nama pasien" name="nama"
                                value="{{ $data->nama }}" autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="Jenis Kelamin">Jenis Kelamin</label>
                            <select id="Jenis Kelamin" class="select2 form-select" name="jenis_kelamin" value="{{$data->jenis_kelamin}}">
                                <option value=""><-- Pilih Jenis Kelamin --></option>
                                <option value="Laki - Laki" {{ $data->jenis_kelamin == "Laki - Laki" ? 'selected' : ''}}>Laki - Laki</option>
                                <option value="Perempuan" {{ $data->jenis_kelamin == "Perempuan" ? 'selected' : ''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="Email" class="form-label">Email</label>
                            <input class="form-control" type="text" id="Email" name="email"
                                value="{{ $data->email }}" autofocus />
                        </div>
                        {{-- <div class="mb-3 col-md-6">
                            <label for="Password" class="form-label">Password (Isi jika ingin mengubah)</label>
                            <input class="form-control" type="password" id="Password" name="password"
                                placeholder="Kosongkan jika tidak ingin mengubah" />
                        </div> --}}
                        <div class="mb-3 col-md-6">
                            <label for="No HP" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="No Hp" name="no_hp"
                                value="{{ $data->no_hp }}" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <div class="input-group input-group-merge">
                                <input type="hidden" id="Role" name="role" value="{{ $data->role }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <a href="/kader/data_kader" class="btn btn-outline-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
