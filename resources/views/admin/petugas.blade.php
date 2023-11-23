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