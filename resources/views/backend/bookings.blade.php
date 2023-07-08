@extends('template/backend/admin')

@section('content')
<h1>Bookings</h1>
<a href="#" class="btn btn-outline-primary">ayo klik aku</a>
<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Bookings</th>
      <th scope="col">ID Pemesan</th>
      <th scope="col">ID Lapangan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam Mulai</th>
      <th scope="col">Jam Berakhir</th>
      <th scope="col">Durasi</th>
    </tr>
  </thead>
  <tbody>
    @php $nomor = 1; @endphp
    @foreach( $bookings as $booking)
    <tr>
      <th scope="row">{{ $nomor }}</th>
      <td> {{ $booking->id }} </td>
      <td> {{ $booking->pemesan_id }} </td>
      <td>{{ $booking->lapangan_id }}</td>
      <td>{{ $booking->tanggal }}</td>
      <td>{{ $booking->jam_mulai }}</td>
      <td>{{ $booking->jam_akhir }}</td>  
      <td>{{ $booking->durasi }}</td>
    </tr>
    @php $nomor++ @endphp
    @endforeach
  </tbody>
</table>
@endsection