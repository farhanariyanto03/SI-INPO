@extends('bidan.layout')

@section('conten')
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/nurse.png" height="160"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Lansia</span>
                    <h3 class="card-title mb-2">$12,628</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Sudah Diperiksa</span>
                    <h3 class="card-title mb-2">$12,628</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
