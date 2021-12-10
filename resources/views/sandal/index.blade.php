@extends("layout.ceria")
@section("title", "Sandal")

@section("isikonten")

	<h1>Data Sandal</h1>

	<a href="/sandal/tambah" class="btn btn-primary"> + Tambah Sandal Baru</a>

	<br/>
	<br/>

    <p>Cari Merk Sandal :</p>
	<form action="/sandal/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Merk Sandal .." value="{{ old('cari') }}">
		<input class="btn btn-success" type="submit" value="CARI">
	</form>

	<table class="table table-success table-striped">
        	<tr>
            <th>No</th>
			<th>KodeSandal</th>
			<th>MerkSandal</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>

		</tr>
		@foreach($sandal as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->kodesandal }}</td>
			<td>{{ $p->merksandal }}</td>
			<td>{{ $p->stocksandal }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/sandal/detail/{{ $p->kodesandal }}" class="btn btn-primary">Detail</a>
                |
				<a href="/sandal/edit/{{ $p->kodesandal}}" class="btn btn-warning">Edit</a>
				|
				<a href="/sandal/hapus/{{ $p->kodesandal }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $sandal->links()  }}

    @endsection

