@extends('admin.layoutadmin')

@section('css')
        <link rel="stylesheet" href="\css\bootstrap.min.css">
@endsection

@section('tampilkan')
    
      {{-- body --}}
      <div class="container">
        <div class="card shadow">
            <div class="card-header text-bg-white">
                <h4 class="h4 card-title">Table Tambah Spp</h4>
                <!--awalan modal-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Spp
                  </button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Tabel Spp</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('tambahSpp')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                <label for="" class="form-label">Tahun</label>
                                <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tambahkan tahun">
                                </div>
                                <div class="mb-3 row">
                                <label for="" class="form-label">Nominal</label>
                                <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Tambahkan Kompetensi Keahlian">
                                    
                                </div>
                            
                                <div class="mb-3">
                                    <button class="btn form-control btn-success mb-2" type="submit">Tambah </button>
                                    <button class="btn form-control btn-danger mb-2" type="reset">Batal</button>                                  
                                </div>
                            </form>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  <!--alhiran modal-->
                <div class="card-body">
                    <table id="tb_spp" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Id Spp</th>
                                <th>Tahun</th>
                                <th>Nominal</th>
                                <th>Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataspp as $spp)
                                <tr>
                                    <td>{{ $spp->id_spp}}</td>
                                    <td>{{ $spp->tahun}}</td>
                                    <td>{{ $spp->nominal}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-circle btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <a href="" class="btn btn-danger btn-circle btn-sm"><i class="bi bi-trash-fill"></i></a>
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