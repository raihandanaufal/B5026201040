@extends('layout.ceria')
@section('title', 'Data Sandal')
@section('crumb', 'Halaman Sandal')
@section('isikonten')

    <h1 class="text-center">Data Sandal</h1>
 <a href="/sandal" class="btn btn-warning" >Kembali</a>
 <br/>
 <br/>
 <div class="row text-center">
        <div class="col-md-8">
            <table class="table table-success table-striped table-hover">
                <th>
                    <tr>
                        <td>Kode Sandal</td>
                        <td>{{ $sandal->kodesandal }}</td>

                    </tr>
                    <tr>
                        <td>Merk Sandal</td>
                        <td>{{ $sandal->merksandal }}</td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td>{{ $sandal->stocksandal }}</td>
                    </tr>
                    <tr>
                        <td>Ketersediaan</td>
                        <td>{{$sandal->tersedia}}</td>
                    </tr>
                </th>
            </table>
        </div>
    </div>
    @endsection
