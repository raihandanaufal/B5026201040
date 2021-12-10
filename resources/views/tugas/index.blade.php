@extends("layout.ceria")
@section("title", "Tugas")

@section("isikonten")
    <h1>Tabel Tugas Pegawai</h1>
 <a href="/tugas/tambah"  class="btn btn-primary"> + Tambah Tugas Baru</a>
 <br>
 <br>

 <p>Cari Data Tugas Pegawai :</p>
 <form style="margin-top: 20px" class="mt-3" action="/tugas/cari" method="GET">
     <input type="text" name="cari" placeholder="Cari Tugas .." value="{{ old('cari') }}">
     <input class="btn btn-success" type="submit" value="CARI">
 </form>

 <table class="table table-success table-striped">  <tr>
    <th>No</th>
   <th>Nama Pegawai</th>
   <th>Tanggal</th>
   <th>NamaTugas</th>
   <th>Status</th>
   <th>Opsi</th>
  </tr>
  @foreach($tugas as $p)
  <tr>
    <td>{{ $loop->iteration }}</td>
   <td>{{ $p->pegawai_nama}}</td>
   <td>{{ $p->Tanggal }}</td>
   <td>{{ $p->NamaTugas }}</td>
   <td>{{ $p->Status }}</td>
   <td>
    <a href="/tugas/edit/{{ $p->ID }}" class="btn btn-warning">Edit</a>

    <a href="/tugas/hapus/{{ $p->ID}}" class="btn btn-danger">Hapus</a>
   </td>
  </tr>
  @endforeach
 </table>
 {{ $tugas->links()  }}

</div>
@endsection
