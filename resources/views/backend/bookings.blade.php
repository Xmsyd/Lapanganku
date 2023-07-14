@extends('template/backend/admin')

@section('content')
<h1>Bookings</h1>
<a href="bookings/tambah" class="btn btn-outline-primary">ayo klik aku</a>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Bookings ID</th>
      <th scope="col">Nama User</th>
      <th scope="col">Lapangan ID</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam Mulai</th>
      <th scope="col">Jam Berakhir</th>
      <th scope="col">Durasi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $nomor = 1; @endphp
    @foreach( $bookings as $booking)
    <tr>
      <th scope="row">{{ $nomor }}</th>
      <td> {{ $booking->id }} </td>
      <td> {{ $user->where('id', $booking->user_id)->first()->name }} </td>
      <td>{{ $booking->lapangan_id }}</td>
      <td>{{ $booking->tanggal }}</td>
      <td>{{ $booking->jam_mulai }}</td>
      <td>{{ $booking->jam_akhir }}</td>
      <td>{{ $booking->durasi }}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Action Buttons">
          <a href="#" class="btn btn-primary mr-1" style="border-radius: 3px;">View</a>
          <a href="{{ route('bookings.edit', $booking ) }}" class="btn btn-warning mr-1" style="border-radius: 3px;">Edit</a>
          <form action="{{ route('bookings.destroy', $booking) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    @php $nomor++ @endphp
    @endforeach
  </tbody>
</table>
@endsection