@extends('dashboard.app')
@section('title', 'LIST SKCK')
@section('content')
<div class="row">
  <div class="col-md-5">
        <div class="card mt-5">
            <section class="mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0"><strong>GENERATE TANDA TANGAN</strong></h5>
                </div>
                <div class="card-body">
                   <div class="wrapper">
                    <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                  </div>
                  <button id="clear" class="btn btn-warning">Clear</button>
                  <button id="save-jpeg" class="btn btn-success">Save as JPEG</button>
                </div>
            </section>
        </div>
    </div>
</div>
@push('js')
<script>
    let canvas = document.getElementById('signature-pad');
    let signaturePad = new SignaturePad(canvas, {
        minWidth: 2,
        maxWidth: 3,
        penColor: "rgb(66, 133, 244)",
        backgroundColor: "rgb(240, 242, 203)"
    });

    document.getElementById('clear').addEventListener('click', function () {
        signaturePad.clear();
    });

    document.getElementById('save-jpeg').addEventListener('click', function () {
      if (signaturePad.isEmpty()) {
        return alert("Please provide a signature first.");
      }

      let data = signaturePad.toDataURL('image/jpeg');
      // Buat elemen <a> untuk mengunduh gambar
      let downloadLink = document.createElement('a');
      downloadLink.href = data;
      downloadLink.download = 'signature.jpeg'; // Nama file yang akan diunduh

      // Simpan elemen <a> ke dalam dokumen dan klik secara otomatis
      document.body.appendChild(downloadLink);
      downloadLink.click();

      // Hapus elemen <a> setelah pengunduhan
      document.body.removeChild(downloadLink);
    });

</script>
@endpush
@endsection