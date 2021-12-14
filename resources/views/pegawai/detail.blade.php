@extends('layout.ceria')
@section('title', 'Data Pegawai')
@section('crumb', 'Halaman Pegawai')
@section('isikonten')

    <h1 class="text-center">Data Pegawai</h1>
 <a href="/pegawai" class="btn btn-warning" >Kembali</a>
 <br/>
 <br/>
 <div class="row text-center">
        <div class="col-md-8">
            <table class="table table-success table-striped table-hover">
                <th>
                    <tr>
                        <td>Kode Pegawai</td>
                        <td>{{ $pegawai->pegawai_nama }}</td>

                    </tr>
                    <tr>
                        <td>Jabatan egawai</td>
                        <td>{{ $pegawai->pegawai_jabatan }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>{{ $pegawai->pegawai_umur }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{$pegawai->pegawai_alamat}}</td>
                    </tr>
                </th>
            </table>
        </div>
    </div>
    @endsection
