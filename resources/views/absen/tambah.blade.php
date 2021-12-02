@extends("layout.ceria")
@section("title", "ABSEN PEGAWAI")

@section("isikonten")
	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Absen Pegawai</h3>

	<a href="/absen" class="btn btn-warning"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		Pegawai <select class="form-control" id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
        </select>
        @endforeach
        <br/>
        <label for="dtpickerdemo" class="control-label">Tanggal</label>

                <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
		Status
        <input type="radio" id="hadir" name="status" value="H">
        <label for="hadir">HADIR</label><br>
        <input type="radio" id="tidak" name="status" value="T" checked="checked">
        <label for="tidak">TIDAK HADIR</label><br>

		<input type="submit" value="Simpan Data">
	</form>
    <script type="text/javascript">
        $(function () {
            $('#dtpickerdemo').datetimepicker({format : "YYYY/MM/DD hh:mm"});
        });
    </script>
@endsection
