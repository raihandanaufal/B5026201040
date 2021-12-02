@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")
<body>


	<a href="/tugas" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
    	IDPegawai <input class="form-control" type="text" name="IDPegawai" required="required"> <br/>
		Tanggal <input class="form-control" type="datetime" name="Tanggal" required="required"> <br/>
		NamaTugas <input class="form-control" type="text" name="NamaTugas" required="required"> <br/>
        Status <input class="form-control" type="text" maxlength="1" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @endsection

