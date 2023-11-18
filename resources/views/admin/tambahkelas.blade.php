@extends('admin.layoutadmin')

@section('css')
  <link rel="stylesheet" href="\css\bootstrap.min.css">
@endsection

@section('tampilkan')


    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data Siswa</h4>
                 <a href="" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">id Kelas</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="id_kelas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama Kelas</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="nama_kelas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Kompetensi Keahlian</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="kompetensi_keahlian">
                        </div>
                    </div>
                    
                
                    <div class="mb-3">
                        <button class="btn btn-success" type="reset"><i class="bi bi-x-square-fill"></i> Batal</button>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-save-fill"></i>&nbsp;Simpan  
                        </button>
                       <button></button>
                          
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection