@extends('bidan.layout')
@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Tambah Pemeriksaan</h5>
            <!-- Account -->
            <div class="card-body"></div>
            <hr class="my-0" />
            <div class="card-body">
                <form id="formAccountSettings" method="POST" action="{{ route('pemeriksaan.store') }}">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="NIK">NIK</label>
                            <select id="NIK" class="select2 form-select" name="NIK"
                                onchange="getNameLansia(this.value)">
                                <option selected disabled><-- Pilih NIK --></option>
                                @foreach ($data_lansia as $lansia)
                                    <option value="{{ $lansia->NIK }}">{{ $lansia->NIK }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama_pasien" class="form-label">Nama Pasien</label>
                            <input class="form-control" type="text" id="nama" name="nama" autofocus disabled />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama_pasien" class="form-label">Jenis Kelamin</label>
                            <input class="form-control" type="text" id="jenis_kelamin" name="jenis_kelamin" autofocus
                                disabled />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="alamat">Alamat</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="alamat" name="alamat" class="form-control" disabled />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status_kesehatan" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" disabled />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status_kesehatan" class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" id="bb" name="bb" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status_kesehatan" class="form-label">TInggi Badan</label>
                            <input type="text" class="form-control" id="tb" name="tb" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Tekanan Darah</label>
                            <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah"
                                oninput="updateStatusTekananDarah()" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status_kesehatan" class="form-label">Hasil Pemeriksaan Tekanan Darah</label>
                            <input type="text" class="form-control" id="hasil_pemeriksaan" name="hasil_pemeriksaan" readonly/>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Kolestrol</label>
                            <input type="text" class="form-control" id="kolestrol" name="kolestrol"
                                oninput="updateStatusKolestrol()" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status_kesehatan" class="form-label">Hasil Pemeriksaan Kolestrol</label>
                            <input type="text" class="form-control" id="hasil_pemeriksaan1" name="hasil_pemeriksaan1" readonly/>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Gula Darah</label>
                            <input type="text" class="form-control" id="gula_darah" name="gula_darah"
                                oninput="updateStatusGulaDarah()" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status_kesehatan" class="form-label">Hasil Pemeriksaan Guka Darah</label>
                            <input type="text" class="form-control" id="hasil_pemeriksaan2"     name="hasil_pemeriksaan2" readonly/>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getNameLansia(selectedNIK) {
            $.ajax({
                url: "{{ route('getNameLansia') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    NIK: selectedNIK
                },
                success: function(response) {
                    if (response.error) {
                        alert(response.error);
                    } else {
                        $('#nama').val(response.nama);
                        $('#jenis_kelamin').val(response.jenis_kelamin);
                        $('#alamat').val(response.alamat);
                        $('#no_hp').val(response.no_hp);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        function updateStatusTekananDarah() {
            var tekananDarah = parseFloat($('#tekanan_darah').val());
            if (isNaN(tekananDarah)) {
                $('#hasil_pemeriksaan').val('');
            } else if (tekananDarah < 80) {
                $('#hasil_pemeriksaan').val('Hipotensi');
            } else if (tekananDarah >= 80 && tekananDarah <= 120) {
                $('#hasil_pemeriksaan').val('Normal');
            } else if (tekananDarah > 120) {
                $('#hasil_pemeriksaan').val('Hipertensi');
            }
        }

        function updateStatusKolestrol() {
            var kolestrol = parseFloat($('#kolestrol').val());
            if (isNaN(kolestrol)) {
                $('#hasil_pemeriksaan1').val('');
            } else if (kolestrol < 200) {
                $('#hasil_pemeriksaan1').val('Baik');
            } else if (kolestrol >= 200 && kolestrol <= 239) {
                $('#hasil_pemeriksaan1').val('Waspada');
            } else if (kolestrol > 240) {
                $('#hasil_pemeriksaan1').val('Bahaya');
            }
        }

        function updateStatusGulaDarah() {
            var gulaDarah = parseFloat($('#gula_darah').val());
            if (isNaN(gulaDarah)) {
                $('#hasil_pemeriksaan2').val('');
            } else if (gulaDarah < 70) {
                $('#hasil_pemeriksaan2').val('Hipoglikemi');
            } else if (gulaDarah < 140) {
                $('#hasil_pemeriksaan2').val('Normal');
            } else if (gulaDarah >= 140 && gulaDarah <= 199) {
                $('#hasil_pemeriksaan2').val('Pre-Diabetes');
            } else if (gulaDarah >= 200) {
                $('#hasil_pemeriksaan2').val('Diabetes');
            }
        }
    </script>
@endsection
