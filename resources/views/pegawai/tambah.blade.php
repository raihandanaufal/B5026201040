@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input class="form-control" type="text" name="nama" required="required"> <br/>
		Jabatan <input class="form-control" type="text" name="jabatan" required="required"> <br/>
		Umur <input class="form-control" type="number" name="umur" required="required"> <br/>
		Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

    @endsection

