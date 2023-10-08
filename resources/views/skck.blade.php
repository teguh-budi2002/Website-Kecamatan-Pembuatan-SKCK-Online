@extends('app')
@section('title', 'Home')
@section('content')
<div class="w-100 h-auto d-flex justify-content-center" style="min-height: 100vh">
    @if (is_null($data_skck_user))
    <div class="w-50 h-auto bg-white p-5 mt-5 mb-5 rounded-1 shadow-3">
        <div class="d-flex justify-content-center">
            <a href="#" class="ripple">
                <img src="{{ asset('img/logo_kec_sidoarjo.png') }}" class="img-fluid"
                    style="width: 150px; height: 150px;" alt="logo_kec_sidoarjo">
            </a>
        </div>
        <p class="text-center fs-2" style="color: ">Formulir SKCK</p>
        <form action="{{ URL('skck/process') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    @error('first_name')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                            class="form-control" />
                        <label class="form-label" for="first_name">Nama Depan</label>
                    </div>
                </div>
                <div class="col-md-6">
                    @error('last_name')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                            class="form-control" />
                        <label class="form-label" for="last_name">Nama Belakang</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <input type="text" id="nik" name="nik" class="form-control" @if (Auth::check()) {{ 'readonly' }}
                            @endif value="{{ Auth::check() ? Auth::user()->nik : '' }}" />
                        <label class="form-label" for="nik">NIK</label>
                    </div>
                </div>
                <div class="col-md-6">
                    @error('address')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="address" name="address" value="{{ old('address') }}"
                            class="form-control" />
                        <label class="form-label" for="address">Alamat Lengkap</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <input type="date" id="birthday" name="birthday" class="form-control" />
                        <label class="form-label" for="birthday">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col-md-6">
                    @error('place_of_birth')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth') }}"
                            class="form-control" />
                        <label class="form-label" for="place_of_birth">Tempat Lahir</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" mb-4">
                        <label class="form-label" for="gender">Jenis Kelamin</label>
                        <select name="gender" class="form-select" id="gender">
                            <option value="laki" selected>Laki-Laki</option>
                            <option value="wanita">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    @error('phone_number')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-outline mb-4" style="margin-top: 35px">
                        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                            class="form-control" />
                        <label class="form-label" for="phone_number">Nomer Telepon</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="purposes_of">Keperluan Untuk</label>
                        <select name="purposes_of" class="form-select" id="purposes_of">
                            <option value="Melamar Pekerjaan" selected>Melamar Pekerjaan</option>
                            <option value="Pindah Alamat">Pindah Alamat</option>
                            <option value="Melanjutkan Pendidikan Lingkup Kecamatan">Melanjutkan Pendidikan Lingkup
                                Kecamatan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    @error('religion')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-4">
                        <label class="form-label" for="religion">Agama</label>
                        <select name="religion" class="form-select" id="religion">
                            <option value="Islam" selected>Islam</option>
                            <option value="Non Islam">Non Islam</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @error('country')
                    <div class="alert alert-danger"
                        style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                        role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-outline mb-4">
                        <input type="text" id="country" name="country" value="Indonesia" readonly
                            class="form-control" />
                        <label class="form-label" for="country">Suku Bangsa</label>
                    </div>
                </div>
            </div>
            <div class="photo_face">
                @error('image')
                <div class="alert alert-danger"
                    style="padding: 5px; padding-left: 8px;padding-right: 5px; font-size: 13px; border-radius: 5px;text-transform: capitalize;"
                    role="alert">
                    {{ $message }}
                </div>
                @enderror
                <label class="form-label" for="customFile">Foto Wajah</label>
                <input type="file" class="form-control" name="image" id="customFile" />
            </div>

            <div class="validity_period mt-4">
                <p>Masa Berlaku: <span class="fw-bold">3 Bulan</span></p>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Kirim Formulir</button>
        </form>
    </div>
</div>
@else
<div class="w-100" style="height: fit-content;">
    <div class="mx-auto mt-5" style="width: 600px;">
        <div class="card" style="height: fit-content;">
            <div class="card-header">
                <p class="text-center fw-bold fs-2">STATUS SKCK</p>
            </div>
            <div class="card-body">
                <div class="detail_status text-center">
                    @php
                        $btnColor = '';
                        switch ($data_skck_user->status) {
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
                    <button class="btn btn-{{ $btnColor }}">{{ $data_skck_user->status }}</button>
                </div>
                <div class="desc_status mt-3">
                    <p class="text-danger fs-4" style="margin: 0px">PERHATIAN!!!</p>
                    <p style="font-size: 13px;">Jika status masih belum pada tahap <span class="fw-bold text-success">KONFIRMASI</span>, maka surat SKCK masih belum berlaku.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="h-100 p-4 mt-5 mb-5 rounded mx-auto" style="width: 600px;background-color: #f0f2cb;">
        <div class="header d-flex justify-content-between align-items-start">
            <div class="lefit_item text-center fw-bold border-bottom pb-2 border-dark" style="border-color: black;">
                <p style="margin: 0; font-size: 13px">KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
                <p style="margin: 0; font-size: 13px">DAERAH JAWA TIMUR</p>
                <p style="margin: 0; font-size: 13px">RESORT KOTA SIDOARJO</p>
                <p style="margin: 0; font-size: 13px">Jl. R. A Kartini 87 A Sidoarjo 61218</p>
            </div>
            <div class="right_item">
                <p class="fw-bold" style="opacity: 0.45">Nomor: {{ $data_skck_user->police_number }}</p>
            </div>
        </div>
        <div class="subheading  mt-4">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/polres_sdj.png') }}" class="img-fluid mx-auto" style="width: 80px; height: 80px"
                    alt="logo polres">
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
                            <p class="fw-bold" style="font-size: 10px; margin: 0px">KEPOLISIAN RESORT SIDOARJO, dengan
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
                                        {{ $data_skck_user->first_name }} {{ $data_skck_user->last_name }}</p>
                                    <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                        {{ $data_skck_user->place_of_birth }}, {{ $data_skck_user->birthday }}</p>
                                    <p class="fw-normal" style="font-size: 10px; margin: 1px">: Indonesia</p>
                                    <p class="fw-normal" style="font-size: 10px; margin: 1px">: Islam</p>
                                    <p class="fw-normal" style="font-size: 10px; margin: 1px">: -</p>
                                    <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                        {{ $data_skck_user->address }}</p>
                                    <p class="fw-normal" style="font-size: 10px; margin: 1px">:
                                        {{ $data_skck_user->nik }}</p>
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
                                <p class="fw-bold" style="font-size: 10px; margin: 2px">Catatan kriminal yang ada.</p>
                                <p class="fw-bold" style="font-size: 10px; margin: 2px">Surat keterangan dari aparat
                                    Desa / Lurah.</p>
                                <p class="fw-bold" style="font-size: 10px; margin: 2px">Daftar pelaku / anggota atau
                                    gerakan terlarang.</p>
                                <div>
                                    <p class="fw-bold" style="font-size: 10px; margin: 2px">Maka yang bersangkutan :</p>
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
                                                style="font-size: 10px; text-transform: uppercase; margin: 1px">tidak
                                                pernah terlibat perkara pidana</p>
                                            <p class="fw-bold"
                                                style="font-size: 10px; text-transform: uppercase; margin: 1px">tidak
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
                            <p class="fw-bold" style="font-size: 10px">Surat keterangan ini diberikan untuk keperluan:
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
            <div class="d-flex justify-content-end">
                <div class="d-flex">
                    <img src="{{ asset('/storage/img_profile/' . $data_skck_user->image) }}" class="img_fluid me-3"
                        style="width: 100px; height: 100px;" alt="photo_profile">
                    <div class="right_item border-bottom border-dark" tyle="width: fit-content; margin: 0px; padding-bottom: 1px;">
                        <p class="fw-bold" style="font-size: 10px; margin: 1px;">Dikeluarkan di : Sidoarjo</p>
                        <p class="fw-bold" style="font-size: 10px; margin: 1px;">Pada tanggal : <span
                                class="fw-normal">{{ $data_skck_user->created_at->format('d F Y') }}</span></p>
                        @if ($data_skck_user->skck_validate_by)
                            <img src="{{ asset('/storage/signature/' . $data_skck_user->police_number . '/' . $data_skck_user->skck_validate_by->signature) }}" class="img_fluid me-3"
                                style="width: 140px; height: 60px;" alt="signature">
                            <div class="signature_by">
                                <p style="margin: 0px; font-size: 11px; text-transform: capitalize">{{ $data_skck_user->skck_validate_by->signature_by }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@push('js')
<script>
    let canvas = document.getElementById('signature-pad');
    let signaturePad = new SignaturePad(canvas, {
        // penColor: "rgb(66, 133, 244)",
        backgroundColor: "rgb(205, 204, 246)"
    });

    document.getElementById('clear-button').addEventListener('click', function () {
        signaturePad.clear();
    });

    document.getElementById('signature-input').value = signaturePad.toDataURL("image/jpeg");

</script>
@endpush
@endsection
