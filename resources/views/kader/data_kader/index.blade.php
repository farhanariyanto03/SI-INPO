@extends('kader.layout')
@section('conten')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="p-3">
            <a href="{{ route('data_kader.create') }}" class="btn btn-primary col-2"> + Kader</a>
        </div>
        <div class="col-md-6e p-1">
            <div class="card-body bg-white p-2" style="border-radius: 18px;">
                <table class="table table-hover large" id="myTable">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Tangal Lahir</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody class="table-border-bottom-0">
                        @foreach ($data as $pasien)
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $pasien->NO_RM }}</strong>
                                </td>
                                <td><?= $pasien['nama_pasien'] ?></td>
                                <td><?= $pasien['jenis_kelamin'] ?></td>
                                <td><?= $pasien['tggl_lahir'] ?></td>
                                <td><?= $pasien['alamat'] ?></td>
                                <td><?= $pasien['no_hp'] ?></td>
                                <td>
                                    <a href="{{ route('dataPasien.edit', $pasien->NO_RM) }}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                    <form action="{{ route('dataPasien.destroy', $pasien->NO_RM) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button id="confirmDelete" type="submit"
                                            class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
                                            <i class="bx bx-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
