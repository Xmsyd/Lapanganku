<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Lapanganku</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="/assets/dist/kick-off.png" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="/assets/dist/css/style2.css" rel="stylesheet" />
  <!-- Styles -->
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <img src="/assets/dist/img/{{ $lapangan->nama_lap }}.jpg" alt="project-image" class="rounded img-fluid">
        <div class="project-info-box">
          <p><b>Nama Lapangan:</b> {{ $lapangan->nama_lap }}</p>
          <p><b>Lokasi:</b> {{ $lapangan->lokasi }}</p>
          <p><b>Kategori:</b> {{ $kategori->nama }}</p>
          <p><b>Harga:</b> RP.{{ $lapangan->harga_perjam }}.000,00</p>
        </div><!-- / project-info-box -->
      </div><!-- / column -->
      <div class="col-md-5">
        <div class="project-info-box mt-0">
          <h5>Booking Form</h5>
          <form action="{{ route('booking') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="lapangan_id" value="{{ $lapangan->id }}">
            <div class="mb-3">
              <label for="tanggal">Tanggal</label>
              <input type="text" class="form-control" id="tanggal" name="tanggal" value="YYYY-MM-DD" required>
              <small>Format: YYYY-MM-DD</small>
            </div>
            <div class="mb-3">
              <label for="jam_mulai">Jam Mulai</label>
              <input type="text" class="form-control" id="jam_mulai" name="jam_mulai" value="HH:MM:SS" required>
              <small>Format: HH:MM:SS</small>
            </div>
            <div class="mb-3">
              <label for="jam_akhir">Jam Akhir</label>
              <input type="text" class="form-control" id="jam_akhir" name="jam_akhir" value="HH:MM:SS" required>
              <small>Format:   HH:MM:SS</small>
            </div>
            <div class="mb-3">
              <label for="durasi">Durasi (jam)</label>
              <input type="number" class="form-control" id="durasi" name="durasi" required>
            </div>
            <button type="submit" class="btn btn-primary">Book Now</button>
          </form>
        </div><!-- / project-info-box -->
      </div><!-- / column -->
    </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="/assets/dist/js/scripts.js"></script>
</body>

</html>
