<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Tugas Pegawai</title>
</head>

<body class="container m-3">
    <h3> Tugas Pegawai </h3>

	<a href="/tugas/tambah" class="btn btn-info"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table class="table table-dark table-hover">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->ID}}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status}}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
