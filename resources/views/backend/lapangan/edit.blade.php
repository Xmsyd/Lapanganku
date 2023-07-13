@extends('template/backend/admin')
@section('content')
<form action=" {{ route('lapangan.update', $lapangan) }} " method="POST">
    @csrf
    @method('PUT')
    <!-- Nama Lapangan -->
    <div class="form-group row">
        <label for="nama_lap" class="col-4 col-form-label">Nama Lapangan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <input id="nama_lap" name="nama_lap" type="text" class="form-control" required="required" value=" {{ $lapangan->nama_lap }} ">
            </div>
        </div>
    </div>
    
    <!-- Lokasi Lapangan -->
    <div class="form-group row">
        <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <textarea id="lokasi" name="lokasi" type="text" class="form-control" required="required">{{ $lapangan->lokasi }}</textarea>
            </div>
        </div>
    </div>
    
    <!-- Harga/jam -->
    <div class="form-group row">
        <label for="harga_perjam" class="col-4 col-form-label">Harga / Jam</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <input id="harga_perjam" name="harga_perjam" type="number" step="0.01" class="form-control" required="required" value="{{ $lapangan->harga_perjam }}">
            </div>
        </div>
    </div>
    
    <!-- Kategori Lapangan(ID) -->
    <div class="form-group row">
        <label for="kategori_id" class="col-4 col-form-label">Kategori Lapangan</label>
        <div class="col-8">
                <select name="kategori_id" class="custom-select">
                    @foreach ($kategori as $kate)
                    <option value=" {{ $kate->id }} "> {{ $kate->nama }} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection