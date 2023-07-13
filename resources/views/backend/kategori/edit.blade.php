@extends('template/backend/admin')
@section('content')
<form action=" {{ route('kategori.update', $kategori) }} " method="POST">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Kategori</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="{{ $kategori->nama }}">
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