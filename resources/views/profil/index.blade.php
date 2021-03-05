@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="d-flex mb-2p">
                    <div class="mr-auto">
                        <a href="{{route('profil.create')}}" class="btn btn-info mr-2">Tambah data Baru</a>
                    </div>
                    <form action="{{route('laporan.periode.profil')}}" method="GET">
                    <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                                <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
                         </div>
                     </div>
                     <div>
                       <button class="btn btn-info"> Cari data </button>
                     </div>
                    </div>                 
                </form>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>tempat lahir</th>
                            <th>tanggal lahir</th>
                            <th>jenis kelamin</th>
                            <th>usia</th>
                            <th>hobi</th>
                            <th>option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profile as $profil)
                        <tr>
                            <td>{{$profil->nama}}</td>
                            <td>{{$profil->tempat_lahir}}</td>
                            <td>{{$profil->tanggal_lahir}}</td>
                            <td>{{$profil->jenis_kelamin}}</td>
                            <td>{{$profil->usia}}</td>
                            <td>{{$profil->hobi}}</td>
                            <td>
                                <form action="{{route('profil.delete',$profil->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <a href="{{route('profil.edit',$profil->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                <button class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>
</div>

@endsection