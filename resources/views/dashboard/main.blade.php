@extends('dashboard.app')
@section('title', 'Main')
@section('content')
<div class="card">
    <section class="mb-4">
        <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
        </div>
        <div class="card-body">
            <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
        </div>
    </section>
</div>
<section>
    <div class="row mt-3">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                        <div>
                            <h3 class="text-success">{{ App\Models\User::count() }}</h3>
                            <p class="mb-0">Karyawan</p>
                        </div>
                        <div class="align-self-center">
                            <i class="far fa-user text-success fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection