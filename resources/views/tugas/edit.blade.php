@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")

	<h3>Edit Tugas</h3>

	<a href="/tugas" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID}}"> <br/>
        IDPegawai <input  class="form-control" type="text" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input class="form-control" type="datetime" name="Tanggal" required="required" value="{{ $p->Tanggal}}"> <br/>
		NamaTugas <input class="form-control" type="text" name="NamaTugas" required="required" value="{{ $p->NamaTugas }}"> <br/>
        Status <input class="form-control" type="text" maxlength="1" name="Status" required="required" value="{{ $p->Status}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection

