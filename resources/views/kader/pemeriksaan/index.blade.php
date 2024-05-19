@extends('kader.layout')
@section('conten')
    {{-- <script>
    window.print();
</script> --}}
    <style>
        /* Mengatur elemen yang ingin disembunyikan saat mencetak */
        @media print {

            #tgl_awal,
            #tgl_akhir,
            .btn-primary {
                display: none !important;
            }
        }
    </style>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="p-3">
                <form action="#" method="GET">
                    <div class="row mb-3 align-items-end">
                        <div class="col-2">
                            <label for="tgl_awal" class="form-label" id="tgl_awal">Tanggal Awal</label>
                            <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
                        </div>
                        <div class="col-2">
                            <label for="tgl_akhir" class="form-label" id="tgl_akhir">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
                        </div>
                        <div class="col-5 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary mb-0">Cari</button>
                        </div>
                        <div class="col-3 d-flex align-items-end justify-content-end">
                            {{-- <a href="{{ route('laporanPemeriksaan.cetakLaporan') }}" class="btn btn-warning mb-0" id="btn-cetak">Cetak Laporan</a> --}}
                            <button class="btn btn-warning mb-0" id="btn-cetak">Cetak Laporan</button>
                        </div>
                    </div>
                </form>
            </div>
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
                                <th>Tanggal Pemeriksaan</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($data_lansia as $data)
                                <tr>
                                    <td><?= $data['NIK'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['hasil_pemeriksaan'] ?></td>
                                    <td><?= $data['hasil_pemeriksaan1'] ?></td>
                                    <td><?= $data['hasil_pemeriksaan2'] ?></td>
                                    <td><?= $data['tggl_pemeriksaan'] ?></td>
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
    <script>
        function hideElementsOnPrint() {
            // Mengubah display menjadi none untuk elemen tanggal dan tombol submit saat mencetak
            // document.getElementById('tgl_awal').style.display = 'none';
            // document.getElementById('tgl_akhir').style.display = 'none';
            // document.querySelector('.btn-primary').style.display = 'none';
            // document.querySelector('.btn-cetak').style.display = 'none';

            // Mengubah display menjadi block untuk elemen yang ingin tetap ditampilkan saat mencetak
            document.querySelector('.table').style.display = 'block';
            document.querySelector('.card-body').style.display = 'block';
        }

        // Menggunakan event listener untuk memanggil fungsi window.print() saat tombol cetak laporan diklik
        document.querySelector('#btn-cetak').addEventListener('click', () => {
            window.print();
        });
    </script>
@endsection
