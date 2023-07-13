@extends('template/backend/admin')

@section('content')
<h1>Kategori</h1>
<a href="kategori/tambah" class="btn btn-outline-primary">Tambah Kategori</a>
<div class="table-responsive">
    <table class="table table-borderless table-centered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Kategori Lapangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $nomor = 1 ; @endphp
            @foreach ($kategori as $kate )
            <tr>
                <td>{{ $nomor }}</td>
                <td>{{ $kate->id }}</td>
                <td>{{ $kate->nama }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Action Buttons">
                        <a href="#" class="btn btn-primary mr-1" style="border-radius: 3px;">View</a>
                        <a href="{{ route('kategori.edit', $kate ) }}" class="btn btn-warning mr-1" style="border-radius: 3px;">Edit</a>
                        <form action="{{ route('kategori.destroy', $kate) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
</div>
@endsection
