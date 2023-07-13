@extends('template/backend/admin')

@section('content')
<h1>User</h1>
<a href="users/tambah" class="btn btn-outline-primary">ayo klik aku</a>
<table class="table table-borderless">
<thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID User</th>
      <th scope="col">Nama User</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php $nomor = 1 ; @endphp
  @foreach ( $users as $user )
    <tr>
      <th scope="row"> {{ $nomor }} </th>
      <td> {{ $user->id }} </td>
      <td> {{ $user->name }} </td>
      <td> {{ $user->email }} </td>
      <td> {{ $user->password }} </td>
      <td>
          <div class="btn-group" role="group" aria-label="Action Buttons">
              <a href="#" class="btn btn-primary mr-1" style="border-radius: 3px;">View</a>
              <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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