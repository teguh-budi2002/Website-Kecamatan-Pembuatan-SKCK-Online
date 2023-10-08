@extends('dashboard.app')
@section('title', 'LIST SKCK')
@section('content')
<div class="row">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <section class="mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0"><strong>List Absensi Karyawan</strong></h5>
                </div>
                <div class="card-body">
                    <table class="table align-middle mb-0 bg-white" id="employee-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pembuat</th>
                                <th>Nomor SKCK</th>
                                <th>Dikirim Pada</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_skck as $skck)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        {{ $loop->iteration }}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fw-bold">
                                                <span>{{ $skck->first_name }}</span>
                                                <span>{{ $skck->last_name }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fw-bold">
                                                <span style="text-transform: capitalize;">NOMOR - 11 25553</span>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="fw-bold">
                                                <span>{{ Carbon\Carbon::parse($skck->created_at)->format("d/F/Y H:m:s") }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            @php
                                            $btnColor = '';
                                            switch ($skck->status) {
                                                case 'Proses':
                                                    $btnColor = 'primary';
                                                    break;
                                                case 'Konfirmasi':
                                                    $btnColor = 'success';
                                                    break;
                                                case 'Ditolak':
                                                    $btnColor = 'danger';
                                                    break;

                                                default:
                                                    $btnColor = 'dark';
                                                    break;
                                                }
                                            @endphp
                                            <button
                                                class="btn btn-sm btn-{{ $btnColor }}">{{ $skck->status }}</button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ URL('dashboard/list-skck/validation-skck/' . $skck->police_number) }}"
                                        class="btn btn-success">Validasi SKCK</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="pagination mt-4">
            {{ $list_skck->links() }}
        </div>
    </div>
</div>
@endsection
