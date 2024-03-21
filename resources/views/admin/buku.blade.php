@extends('admin.layoutadmin')

@section('css')
        <link rel="stylesheet" href="\css\bootstrap.min.css">
@endsection

@section('tampilkan')
    
      {{-- body --}}
      <div class="container">
        <div class="card shadow">
            <div class="card-header text-bg-white">
                <h4 class="h4 card-title">Table Tambah Buku</h4>
                <!--awalan modal-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Buku
                  </button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Tabel Kelas</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('tambahbuku')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="" class="form-label">Judul</label>
                                        <input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul">
                                    
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="form-label">Penulis</label>
                                        <input type="text" class="form-control" name="Penulis" id="Penulis" placeholder="Penulis">
                                    
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="form-label">Penerbit</label>
                                        <input type="text" class="form-control" name="Penerbit" id="Penerbit" placeholder="Penerbit">
                                    
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="form-label">Tahun Terbit</label>
                                        <input type="text" class="form-control" name="TahunTerbit" id="TahunTerbit" placeholder="TahunTerbit">
                                    
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="form-label">Stok</label>
                                    
                                        <input type="text" class="form-control" name="stok" id="stok" placeholder="stok">
                                    
                                </div>
                            
                                <div class="mb-3">
                                    <button class="btn form-control btn-success mb-2" type="submit">Tambah </button>
                                    <button class="btn form-control btn-danger mb-2" type="reset">Batal</button>                                  
                                </div>
                                </div>
                              
                            </form>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  <!--alhiran modal-->
                <div class="card-body">
                    <table id="tb_kelas" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Buku Id</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->BukuID }}</td>
                                    <td>{{ $item->Judul }}</td>
                                    <td>{{ $item->Penulis }}</td>
                                    <td>{{ $item->Penerbit }}</td>
                                    <td>{{ $item->TahunTerbit }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>
                                        <a href="{{url('editbuku/'.$item->BukuID)}}" class="btn btn-warning btn-circle btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{url('hapusbuku/'.$item->BukuID)}}" class="btn btn-danger btn-circle btn-sm"><i class="bi bi-trash"></i></a>
                                    </td>
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