@extends('layout.main')

@section('title')
<title>TITLE</title>
@endsection
@section('content')

<div class="container">

    <div class="card mt-4">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4>  Absen hari ini </h4>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Tanggal </th>
                                <th> Nama </th>
                                <th> Keterangan </th>
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
                                    <td>{{ $a->keterangan }}</td>
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
            <table class="table table-bordered" id="myTable1">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Tanggal </th>
                        <th> Nama </th>
                        <th> Keterangan </th>
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
                            <td>{{ $a->keterangan }}</td>
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
