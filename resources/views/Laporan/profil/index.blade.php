@extends('layouts.cetak')

@section('content')
    <div class="row">
        <div class="cold-md-12">
            <div class="text-center">
                <P>
                    <b>
                        <h3>Inventori
                            <br>Jl Gading 34
                        </h3>
                    </b>
                </P>
            </div>

            @if (request('tgl_awal'))
                <small>Dari tanggal {{request('tgl_awal') }}
                        Sampai tanggal {{request('tgl_akhir') }}
                </small>
            @endif

            <u>
                <h4>Laporan Barang Masuk</h4>
            </u>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama |</th>
                        <th>Tempat Lahir |</th>
                        <th>Tanggal Lahir |</th>
                        <th>Jenis Kelamin |</th>
                        <th>Usia |</th>
                        <th>Hobi |</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($profile as $get)
                        <tr>
                            <td>{{$get->nama}} |</td>
                            <td>{{$get->tempat_lahir}} |</td>
                            <td>{{$get->tanggal_lahir}} |</td>
                            <td>{{$get->jenis_kelamin}}</td>
                            <td>{{$get->usia}}</td>
                            <td>{{$get->hobi}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Data Tidak Ditemukan !</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection