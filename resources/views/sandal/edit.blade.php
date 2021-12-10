@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")

	<h3>Edit Sandal</h3>

	<a href="/sandal" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	@foreach($sandal as $p)
	<form action="/sandal/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesandal }}"> <br/>
		kode sandal <input class="form-control" type="text" required="required" name="kodesandal" value="{{ $p->kodesandal }}"> <br/>
		merk sandal <input class="form-control" type="text" required="required" name="merksandal" value="{{ $p->merksandal }}"> <br/>
		stock <input class="form-control" type="number" required="required" name="stock" value="{{ $p->stocksandal }}"> <br/>
        <div class="mb-3">
            <label class="form-label">Ketersediaan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="Tersedia" name="tersedia" value="T" required>
                <label class="form-check-label" for="Tersedia">
                 TERSEDIA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="Kosong" name="tersedia" value="K" checked="checked" required>
                <label class="form-check-label" for="Kosong">
                  KOSONG
                </label>
              </div>
            </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection

