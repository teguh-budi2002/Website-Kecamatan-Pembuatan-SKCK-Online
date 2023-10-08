@extends('app')
@section('title', 'Home')
@section('content')
<div class="w-100 h-auto d-flex justify-content-center" style="min-height: 100vh">
  <div class="w-75 card mt-5" style="height: fit-content;">
    <div class="card-header">
      <p class="text-center fs-1 fw-bold text-danger" style="margin: 2px;">VISI & MISI</p>
    </div>
    <div class="card-body">
      <div class="visi">
        <p class="fs-3 fw-bold" style="margin: 2px;color: #6C6C6C">VISI</p>
        <p>"Mewujudkan Masyarakat Sidoarjo Yang Mandiri dan Sejahtera"</p>
      </div>
      <div class="misi">
        <p class="fs-3 fw-bold" style="margin: 2px;color: #6C6C6C">MISI</p>
        <p style="margin: 2px;">-Menciptakan pemerintahan yang bersih, efektif dan efisien</p>
        <p style="margin: 2px;">-Memberikan pelayanan yang cepat, tepat dan murah kepada masyarakat</p>
        <p style="margin: 2px;">-Peningkatan pelayanan umum (Public Service), meliputi peningkatan infrastruktur, peningkatan pelayanan administrasi dan komunikasi, serta peningkatan pelayanan sosial budaya</p>
        <p style="margin: 2px;">-Mendorong terwujudnya proses pemberdayaan masyarakat</p>
        <p style="margin: 2px;">-Menciptakan stabilitas keamanan dan ketertiban</p>
      </div>
    </div>
  </div>
</div>
@endsection