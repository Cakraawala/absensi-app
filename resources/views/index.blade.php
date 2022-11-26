<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="/siswa" class="btn btn-dark">Siswa</a>
        <a href="/absen" class="btn btn-dark">Absen</a>
        @if (Auth::check()){
            <a href="/logout" class="btn btn-dark"> Logout</a>
        }@else
        <a href="/login" class="btn btn-dark"> Login </a>
        @endif
        <div class="card mt-4">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h4>  Absen hari ini </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th> # </th>
                                <th> Tanggal </th>
                                <th> Nama </th>
                                <th> Keterangan </th>
                            </tr>
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
                        </table>
                    </div>
                </div>
                <div class="card"  style="margin-top: 50px" >
                    <div class="card-header">
                        <h4>  Absen Total </h4>
                    </div>
                    <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th> # </th>
                        <th> Tanggal </th>
                        <th> Nama </th>
                        <th> Keterangan </th>
                    </tr>
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
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
