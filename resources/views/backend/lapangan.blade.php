@extends('template/backend/admin')

@section('content')
<h1>Lapangan</h1>
<a href="lapangan/tambah" class="btn btn-outline-primary">ayo klik aku</a>
<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Lapangan</th>
      <th scope="col">Nama Lapangan</th>
      <th scope="col">Lokasi </th>
      <th scope="col">Harga Perjam</th>
      <th scope="col">Kategori lapangan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php $nomor = 1 ; @endphp
  @foreach ( $lapangan as $lap )
    <tr>
      <th scope="row"> {{ $nomor }} </th>
      <td> {{ $lap->id }} </td>
      <td> {{ $lap->nama_lap }} </td>
      <td> {{ $lap->lokasi }} </td>
      <td> {{ $lap->harga_perjam }} </td>
      <td>
          {{ $kategori->where('id', $lap->kategori_id)->first()->nama }}
      </td>
      <td>
          <div class="btn-group" role="group" aria-label="Action Buttons">
              <a href="#" class="btn btn-primary mr-1" style="border-radius: 3px;">View</a>
              <a href="{{ route('lapangan.edit', $lap ) }}" class="btn btn-warning mr-1" style="border-radius: 3px;">Edit</a>
              <form action="{{ route('lapangan.destroy', $lap) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                  @csrf 
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </div>
      </td>
    </tr>
  @php $nomor++; @endphp
  @endforeach
  </tbody>
</table>
@endsection