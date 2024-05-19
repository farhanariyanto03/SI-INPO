@extends('kader.layout')
@section('conten')
<script>
    window.print();
</script>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="col-md-6e p-1">
            <div class="card-body bg-white p-2" style="border-radius: 18px;">
                <table class="table table-hover large" id="myTable">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Tekanan Darah</th>
                            <th>Kolestrol</th>
                            <th>Gula Darah</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($cetakLaporan as $data)
                            <tr>
                                <td><?= $data['NIK'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['hasil_pemeriksaan'] ?></td>
                                <td><?= $data['hasil_pemeriksaan1'] ?></td>
                                <td><?= $data['hasil_pemeriksaan2'] ?></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h6>Yang terkena hipertensi : {{ $totalHipertensi }}</h6>
                <h6>Yang terkena kolestrol : {{ $totalKolestrolBahaya }}</h6>
                <h6>Yang terkena diabetes : {{ $totalDiabetes }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection
