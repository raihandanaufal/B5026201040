@extends("layout.ceria")
@section("title", "Input Tugas")

@section("isikonten")

	<h3>Data Sandal</h3>

	<a href="/sandal" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	<form action="/sandal/store" method="post">
		{{ csrf_field() }}
		kode sandal <input class="form-control" type="text" name="kodesandal" required="required"> <br/>
		merk sandal <input class="form-control" type="text" name="merksandal" required="required"> <br/>
		stock sandal<input class="form-control" type="number" name="stock" required="required"> <br/>
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

    @endsection

