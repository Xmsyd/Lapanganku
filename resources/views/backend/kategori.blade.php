@extends('template/backend/admin')

@section('content')
<h1>Kategori</h1>
<a href="#" class="btn btn-outline-primary">ayo klik aku</a>
<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Kategori Lapangan</th>
    </tr>
  </thead>
  <tbody>
    
  @php $nomor = 1 ; @endphp
  @foreach ($kategori as $kate )
    <tr>
      <td> {{ $nomor }} </td>
      <td> {{ $kate->id }} </td>
      <td> {{ $kate->nama }} </td>
    </tr>
  @php $nomor++ @endphp
  @endforeach

  </tbody>
</table>
@endsection