<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="">
            <a href="/siswa" class="btn btn-dark">Siswa</a>
            <a href="/absen" class="btn btn-dark">Absen</a>
            @if (Auth::check())
            <form action="/logout" method="post">
                @csrf
            <button class="btn btn-dark mt-2" type="submit">Logout</button>
            </form>
        </div>
        {{-- <a href="/absen" class="btn btn-dark">Logout</a> --}}
        @endif
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
    <script>
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
</html>
