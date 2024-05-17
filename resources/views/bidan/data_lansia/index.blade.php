@extends('kader.layout')
@section('conten')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="p-3">
            <a href="{{ route('data_lansia.create') }}" class="btn btn-primary col-2"> + Lansia</a>
        </div>
        <div class="col-md-6e p-1">
            <div class="card-body bg-white p-2" style="border-radius: 18px;">
                <table class="table table-hover large" id="myTable">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Status Kesehatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody class="table-border-bottom-0">
                        @foreach ($dataLansia as $data)
                            <tr>
                                <td><?= $data['NIK'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['jenis_kelamin'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['status_kesehatan'] ?></td>
                                <td>
                                    <a href="{{ route('data_lansia.edit', $data->NIK) }}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                    <form action="{{ route('data_lansia.destroy', $data->NIK) }}" method="POST"
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
