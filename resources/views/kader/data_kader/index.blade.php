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
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>No HP</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data_kader as $kader)
                            <tr>

                                <td><?= $kader['nama'] ?></td>
                                <td><?= $kader['jenis_kelamin'] ?></td>
                                <td><?= $kader['email'] ?></td>
                                <td><?= $kader['password'] ?></td>
                                <td><?= $kader['no_hp'] ?></td>
                                <td><?= $kader['role'] ?></td>
                                <td>
                                    <a href="{{route('data_kader.edit', $kader->id)}}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class='bx bxs-pencil'></i>
                                    </a>
                                    <form action="{{ route('data_kader.destroy',$kader->id) }}" method="POST"
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
