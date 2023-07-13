@extends('template/backend/admin')
@section('content')
<form action=" {{ route('bookings.update', $bookings) }} " method="POST">
    @csrf
    @method('PUT')
    <!-- User Id -->
    <div class="form-group row">
        <label for="user_id" class="col-4 col-form-label">User ID</label>
        <div class="col-8">
            <input id="user_id" name="user_id" placeholder="ID user" type="text" class="form-control" value="{{ $bookings->user_id }}">
        </div>
    </div>

    <!-- Lapangan Id -->
    <div class="form-group row">
        <label for="lapangan_id" class="col-4 col-form-label">ID_Lapangan</label>
        <div class="col-8">
            <input id="lapangan_id" name="lapangan_id" placeholder="ID Lapangan" type="text" class="form-control" value="{{ $bookings->lapangan_id }}">
        </div>
    </div>

    <!-- Tanggal -->
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input id="tanggal" name="tanggal" placeholder="Tanggal" type="text" class="form-control" value="{{ $bookings->tanggal }}">
        </div>
    </div>

    <!-- Jam Mulai -->
    <div class="form-group row">
        <label for="jam_mulai" class="col-4 col-form-label">Jam_Mulai</label>
        <div class="col-8">
            <select id="jam_mulai" name="jam_mulai" required="required" class="custom-select">
                <option value="Pilih Jam Mulai">{{ $bookings->jam_mulai }}</option>
                <option value="23:00:00">23:00:00</option>
            </select>
        </div>
    </div>

    <!-- Jam Akhir -->
    <div class="form-group row">
        <label for="jam akhir" class="col-4 col-form-label">Jam_Akhir</label>
        <div class="col-8">
            <select id="jam_akhir" name="jam_akhir" class="custom-select">
                <option value="Pilih jam akhir">Pilih Jam Akhir</option>
                <option value="7:00:00">{{ $bookings->jam_akhir }}</option>
            </select>
        </div>
    </div>

    <!-- Durasi -->
    <div class="form-group row">
        <label for="durasi" class="col-4 col-form-label">Durasi</label>
        <div class="col-8">
            <select id="durasi" name="durasi" class="custom-select">
                <option value="">Pilih Durasi</option>
                <option value="2">2</option>
            </select>
        </div>
    </div>

    <!-- Tombol Submit -->
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection