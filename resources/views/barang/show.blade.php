@extends('layout.layouts') 
@section('content')
    <div class="container">
        <div class="pull-left">
            <h2>TAMPILKAN BARANG</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>MERK</td>
                                <td>{{ $rsetBarang->merk }}</td>
                            </tr>
                            <tr>
                                <td>SERI</td>
                                <td>{{ $rsetBarang->seri }}</td>
                            </tr>
                                <td>SPESIFIKASI</td>
                                <td>{{ $rsetBarang->spesifikasi }}</td>
                            </tr>
                            </tr>
                                <td>STOK</td>
                                <td>{{ $rsetBarang->stok }}</td>
                            </tr>
                            </tr>
                                <td>KATEGORI</td>
                                <td>{{ $rsetBarang->kategori->deskripsi }}</td>
                            </tr>
                            </tr>
                                <td>KODE</td>
                                <td>{{ $rsetBarang->kategori->kategori }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/foto/'.$rsetBarang->foto) }}" class="w-100 rounded">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12  text-center">
                <a href="{{ route('barang.index') }}" class="btn btn-md btn-primary mb-3">Back</a>
            </div>
        </div>
    </div>
@endsection