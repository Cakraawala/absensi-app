@extends('layout.main')

@section('title')
<title>Cakra | Dashboard</title>
@endsection
@section('content')

<div class="container">
    <div class="card mt-4">
    
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                <div class="d-flex justify-content-between">
                <h4>Absen Hari Ini</h4>
            <a href="/absen" class="btn text-white btn-success mr-4"> <i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Tanggal </th>
                                <th> Nama </th>
                                <th> Keterangan </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $no =1 ;
                                    @endphp
                                @foreach ($absennow as $a)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $a->tanggal->isoformat('D/M/YYYY') }}</td>
                                    <td>{{ $a->siswa->nama }}</td>
                                    <td>@if ($a->keterangan == 'Sakit') <span class="badge bg-warning">{{ $a->keterangan }}</span>
                                @elseif ($a->keterangan == 'Ijin') <span class="badge bg-success">{{ $a->keterangan }}</span>
                                @else  <span class="badge bg-danger">{{ $a->keterangan }}</span>
                                @endif</td>
                                <td>
                                    <a href="/absen/{{ $a->id_absensi }}/edit" class="btn btn-warning text-white"><i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="/absen/{{ $a->id_absensi }}/delete"  onclick="return confirm('Apakah kamu yakin ingin menghapus data?')" class="ms-2 btn btn-danger text-white"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card"  style="margin-top: 50px" >
                <div class="card-header">
                    <h4>  Absen Total </h4>
                </div>
                <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Tanggal </th>
                        <th> Nama </th>
                        <th> Keterangan </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                            $no =1 ;
                            @endphp
                        @foreach ($absens as $a)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $a->tanggal->isoformat('D/M/YYYY') }}</td>
                            <td>{{ $a->siswa->nama }}</td>
                            <td>@if ($a->keterangan == 'Sakit') <span class="badge bg-warning">{{ $a->keterangan }}</span>
                                @elseif ($a->keterangan == 'Ijin') <span class="badge bg-success">{{ $a->keterangan }}</span>
                                @else  <span class="badge bg-danger">{{ $a->keterangan }}</span>
                                @endif</td>
                                <td>
                                <a href="/absen/{{ $a->id_absensi }}/edit" class="btn btn-warning text-white"><i class="fa fa-pen" aria-hidden="true"></i></a>
                        <a href="/absen/{{ $a->id_absensi }}/delete"  onclick="return confirm('Apakah kamu yakin ingin menghapus data?')" class="ms-2 btn btn-danger text-white"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
    {{-- <script>
         $(document).ready( function () {
    $('#myTable').DataTable();
} );
//     </script>
    <script>
        $(document).ready( function () {
    $('#myTable1').DataTable();
} );
    </script>
</body>
</html> --}}
