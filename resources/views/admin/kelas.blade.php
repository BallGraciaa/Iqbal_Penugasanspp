@extends('admin.layoutadmin')

@section('css')
        <link rel="stylesheet" href="\css\bootstrap.min.css">
@endsection

@section('tampilkan')
    
      {{-- body --}}
      <div class="container">
        <div class="card shadow">
            <div class="card-header text-bg-white">
                <h4 class="h4 card-title">Data Laporan Masyarakat</h4>
                <div class="card-body">
                    <table id="tb_validasi" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Id Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id_kelas }}</td>
                                    <td>{{ $item->nama_kelas }}</td>
                                    <td>{{ $item->kompetensi_keahlian }}</td>
                                    <td>
                                        <div class="d-flex gap-2 mb-3">
                                            <button type="button"  class="btn btn-primary"> Cek Laporan</button>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection