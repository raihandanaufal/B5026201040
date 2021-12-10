@extends("layout.ceria")
@section("title", "Absen")

@section("isikonten")

	<h1>Data Absen Pegawai</h1>

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>
    <p>Cari Data Absen Pegawai :</p>
    <form style="margin-top: 20px" class="mt-3" action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
		<input class="btn btn-success" type="submit" value="CARI">
	</form>

	<table class="table table-success table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $absen->links()  }}

    @endsection

