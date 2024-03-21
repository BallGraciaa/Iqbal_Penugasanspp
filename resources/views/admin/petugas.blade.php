@extends('admin.layoutadmin')

@section('css')
  <link rel="stylesheet" href="\css\bootstrap.min.css">
@endsection

@section('tampilkan')
    
 {{-- body --}}
 <div class="container">
    <div class="card shadow">
        <div class="card-header text-bg-white">
            <h4 class="h4 card-title">Data Petugas</h4>
            <!--awalan modal-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Petugas
              </button>

              <!--Akhiran Modal-->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Tabel Petugas</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('tambahPetugas')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Tambahkan Username">
                            </div>
                            <div class="mb-3 row">
                            <label for="" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Tambahkan Password">
                            </div>
                            <div class="mb-3 row">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Tambahkan Email Petugas">
                            </div>
                            <div class="mb-3 row">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" placeholder="Tambahkan Nama Lengkap">
                            </div>
                            <div class="mb-3 row">
                            <label for="" class="form-label">Level</label>
                            <input type="text" class="form-control" name="level" id="level" placeholder="Tambahkan Level">
                            </div>
                            
                            <div class="mb-3">
                                <button class="btn form-control btn-success mb-2" type="submit">Tambah </button>
                                <button class="btn form-control btn-danger mb-2" type="reset">Batal</button>                                  
                            </div>
                        </form>
                    </div>




            <div class="card-body">
                <table id="tb_validasi" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>id petugas</th>
                            <th>username</th>
                            <th>password</th>
                            <th>nama petugas</th>
                          <th>level</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ptg as $ptgs)
                            <tr>
                                <td>{{$ptgs->id_petugas}}</td>
                                <td>{{ $ptgs->username}}</td>
                                <td>{{ $ptgs->password}}</td>
                                <td>{{ $ptgs->nama_petugas }}</td>
                                <td>{{ $ptgs->level }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="js\bootstrap.min.js"></script>

@endsection