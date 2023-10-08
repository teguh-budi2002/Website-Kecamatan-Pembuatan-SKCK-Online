@extends('dashboard.app')
@section('title', 'VALIDASI SKCK')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="p-4 mt-5 mb-5 rounded" style="width: 600px;height: fit-content; background-color: #f0f2cb;">
            <div class="header d-flex justify-content-between align-items-start">
                <div class="lefit_item text-center fw-bold border-bottom pb-2 border-dark" style="border-color: black;">
                    <p style="margin: 0; font-size: 13px">KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
                    <p style="margin: 0; font-size: 13px">DAERAH JAWA TIMUR</p>
                    <p style="margin: 0; font-size: 13px">RESORT KOTA SIDOARJO</p>
                    <p style="margin: 0; font-size: 13px">Jl. R. A Kartini 87 A Sidoarjo 61218</p>
                </div>
                <div class="right_item">
                    <p class="fw-bold" style="opacity: 0.45">Nomor: {{ $skck->police_number }}</p>
                </div>
            </div>
            <div class="subheading  mt-4">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/polres_sdj.png') }}" class="img-fluid mx-auto"
                        style="width: 80px; height: 80px" alt="logo polres">
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center mt-2">
                    <p class="fw-bold border-bottom border-dark"
                        style="width: fit-content; font-size: 13px; margin: 0px; padding-bottom: 1px;">SURAT KETERANGAN
                        CATATAN KEPOPOLISIAN</p>
                    <p class="fw-bold text-center" style="width: fit-content; font-size: 13px">NOMOR: SKCK / 10.53 /
                        {{ Carbon\Carbon::now()->format('Y') }} / INTELKAM</p>
                </div>
            </div>
            <div class="body">
                <ul>
                    <li style="list-style: none">
                        <div class="row">
                            <div class="col-md-1">
                                <p class="fw-bold" style="font-size: 10px">1.</p>
                            </div>
                            <div class="col-md-11">
                                <p class="fw-bold" style="font-size: 10px; margin: 0px">KEPOLISIAN RESORT SIDOARJO,
                                    dengan
                                    ini menerangkan bahwa :</p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">Nama</p>
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">Tempat tanggal lahir</p>
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">Suku / Bangsa</p>
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">Agama</p>
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">Pekerjaan</p>
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">Alamat</p>
                                        <p class="fw-bold" style="font-size: 10px; margin: 1px">No. Nik</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                            {{ $skck->first_name }} {{ $skck->last_name }}</p>
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                            {{ $skck->place_of_birth }}, {{ $skck->birthday }}</p>
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">: Indonesia</p>
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">: Islam</p>
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">: -</p>
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                            {{ $skck->address }}</p>
                                        <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                            {{ $skck->nik }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description mt-3">
                            <p class="fw-bold" style="font-size: 12px; margin: 1px; margin-left: 46px;">Setelah diadakan
                                penelitian hingga saat dikeluarkanya surat keterangan ini yang berdasarkan pada:</p>
                            <div class="row">
                                <div class="col-md-2 text-end">
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">a.</p>
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">b.</p>
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">c.</p>
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px"></p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">Catatan kriminal yang ada.
                                    </p>
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">Surat keterangan dari aparat
                                        Desa / Lurah.</p>
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">Daftar pelaku / anggota atau
                                        gerakan terlarang.</p>
                                    <div>
                                        <p class="fw-bold" style="font-size: 10px; margin: 2px">Maka yang bersangkutan :
                                        </p>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p style="font-size: 10px; margin: 1px">-</p>
                                                <p style="font-size: 10px; margin: 1px">-</p>
                                                <p style="font-size: 10px; margin: 1px">-</p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="fw-bold"
                                                    style="font-size: 10px; text-transform: uppercase; margin: 1px">
                                                    BERKELAKUAN BAIK</p>
                                                <p class="fw-bold"
                                                    style="font-size: 10px; text-transform: uppercase; margin: 1px">
                                                    tidak
                                                    pernah terlibat perkara pidana</p>
                                                <p class="fw-bold"
                                                    style="font-size: 10px; text-transform: uppercase; margin: 1px">
                                                    tidak
                                                    pernah terlibat dalam organisasi terlarang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none">
                        <div class="row mt-2">
                            <div class="col-md-1">
                                <p class="fw-bold" style="font-size: 10px">2.</p>
                            </div>
                            <div class="col-md-auto">
                                <p class="fw-bold" style="font-size: 10px">Surat keterangan ini diberikan untuk
                                    keperluan:
                                    <span class="fw-normal">Melamar Pekerjaan</span></p>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none">
                        <div class="row mt-2">
                            <div class="col-md-1">
                                <p class="fw-bold" style="font-size: 10px">3.</p>
                            </div>
                            <div class="col-md-auto">
                                <p class="fw-bold" style="font-size: 10px">Masa berlaku: <span class="fw-normal">3
                                        Bulan</span></p>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none">
                        <div class="row mt-2">
                            <div class="col-md-1">
                                <p class="fw-bold" style="font-size: 10px">4.</p>
                            </div>
                            <div class="col-md-auto">
                                <p class="fw-bold" style="font-size: 10px">Demikian surat keterangan ini dibuat dengan
                                    sebenarnya untuk digunakan sepenuhnya.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer mt-3">
                <div class="d-flex justify-content-around">
                    <div class="d-flex ">
                        {{-- <img src="" alt="photo_profile"> --}}
                        <div class="right_item border-bottom border-dark"
                            tyle="width: fit-content; margin: 0px; padding-bottom: 1px;">
                            <p class="fw-bold" style="font-size: 10px; margin: 1px;">Dikeluarkan di : Sidoarjo</p>
                            <p class="fw-bold" style="font-size: 10px; margin: 1px;">Pada tanggal : <span
                                    class="fw-normal">{{ $skck->created_at->format('d F Y') }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mt-5">
            <section class="mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0"><strong>VALIDASI SKCK</strong></h5>
                </div>
                <div class="card-body">
                    <form action="{{ URL('dashboard/validation-skck/process') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="signature_by">
                            @error('signature_by')
                            <div class="alert alert-danger"
                                style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                                role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="signature_by" name="signature_by"
                                    value="{{ old("signature_by") }}" class="form-control" />
                                <label class="form-label" for="signature_by">Ditanda tangani oleh</label>
                            </div>
                        </div>
                        <div class="signature mt-2">
                            @error('signature')
                            <div class="alert alert-danger"
                                style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                                role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <label class="form-label" for="customFile">Yang bertanda tangan</label>
                            <input type="file" class="form-control" name="signature" id="customFile" />
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" name="good_behavior"
                                id="good_behavior" />
                            <label class="form-check-label" for="good_behavior">Apakah orang tersebut berperilaku
                                baik?</label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" name="is_criminal"
                                id="is_criminal" />
                            <label class="form-check-label" for="is_criminal">Apakah orang tersebut tidak pernah
                                tertindak pidana?</label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" name="is_join_banned_organization"
                                id="is_join_banned_organization" />
                            <label class="form-check-label" for="is_join_banned_organization">Apakah orang tersebut
                                tidak pernah mengikuti organisasi terlarang?</label>
                        </div>
                        <input type="hidden" name="user_id" value="{{ $skck->user_id }}" id="">
                        <input type="hidden" name="skck_id" value="{{ $skck->id }}" id="">
                        <input type="hidden" name="police_number" value="{{ $skck->police_number }}" id="">
                        <div class="btn_submit mt-3">
                            <button type="submit" class="btn btn-success mb-0">KONFIRMASI VALIDASI</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
