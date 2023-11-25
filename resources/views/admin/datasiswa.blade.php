@extends('admin.layoutadmin')

@section('css')
  <link rel="stylesheet" href="\css\bootstrap.min.css">
@endsection

@section('tampilkan')
    
 {{-- body --}}
 <div class="container">
    <div class="card shadow">
        <div class="card-header text-bg-white">
            <h4 class="h4 card-title">Data Siswa</h4>

              <!--awalan modal-->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Siswa
              </button>




              
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Tabel Siswa</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
    
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('tambahSiswa')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="" class="form-label">Nisn</label>
                                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Tambahkan nisn">
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="form-label">Nis</label>
                                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Tambahkan nis"> 
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="form-label">ID_Kelas</label>
                                    <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="Tambahkan id kelas"> 
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Tambahkan alamat"> 
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="form-label">No Telpon</label>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Tambahkan No Telpon"> 
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="form-label">ID Spp</label>
                                    <input type="text" class="form-control" name="id_spp" id="id_spp" placeholder="Tambahkan Id Spp"> 
                            </div>
                            <div class="mb-3">
                                <button class="btn form-control btn-success mb-2" type="submit">Tambah </button>
                                <button class="btn form-control btn-danger mb-2" type="reset">Batal</button>                                  
                            </div>
                        </form>


            <div class="card-body">
                <table id="tb_validasi" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="border-top-0">Nisn</th>
                            <th class="border-top-0">Nis</th>
                            <th class="border top-0">Nama</th>
                            <th class="border-top-0">Id Kelas</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0">No Telpon</th>
                            <th class="border-top-0">Id Spp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nisn}}</td>
                                <td>{{ $item->nis}}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->id_kelas }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->id_spp}}</td>
                               
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