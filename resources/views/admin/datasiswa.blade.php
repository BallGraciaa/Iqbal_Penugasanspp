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
            <div class="card-body">
                <table id="tb_validasi" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Id Kelas</th>
                          <th>Alamat</th>
                          <th>No Telpon</th>
                            <th>Id Spp</th>
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
<script src="/datatable/datatables.min.js"></script>
<script>
    $('#tb_validasi').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    });
</script>

@endsection