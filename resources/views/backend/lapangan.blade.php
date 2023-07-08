@extends('template/backend/admin')

@section('content')
<h1>Lapangan</h1>
<a href="#" class="btn btn-outline-primary">ayo klik aku</a>
<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Lapangan</th>
      <th scope="col">Nama Lapangan</th>
      <th scope="col">Lokasi </th>
      <th scope="col">Harga Perjam</th>
      <th scope="col">Kategori Id</th>
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
      <td> {{ $lap->kategori_id }} </td>
    </tr>
  @php $nomor++ @endphp
  @endforeach
  </tbody>
</table>
@endsection