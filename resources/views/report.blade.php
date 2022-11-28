@extends('layout.main')

@section('title')
<title> Report </title>
<style>
    @media print{
        .waktu,.heder,.btn{display: none;}
        #navbar{display: none}
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 waktu mb-5 mt-2">
                    <form action="/report/cari" method="get">
                        <label>Dari Tanggal : </label>
                        <td class="btn"><input type="date" name="from" class="form-control" required="required"></td>
                        </div>
                        <div class="col-md-3 waktu mb-5 mt-2">
                        <label> Sampai Tanggal : </label>
                        <td class="btn"><input type="date" name="to"  required="required" class="form-control"> </td>
                    </div>
                    <div class="col-md-3 waktu ">
                        <input href="" type="submit" name="filter" value="Filter" style="margin-top: 33px" class="btn waktu ml-4 btn-primary btn-fill pull-right "></input>
                    </div> 
                    <div class="col-md-3 waktu">
                        <a href="" class="waktu btn btn-outline-success " style="margin-left: 120px;margin-top:32px" onclick="window.print()"> Print laporan </a>
                    </div>
                </div>
                    </form>
                    <div class="mb-4">
                        <h4> Dari Tanggal : {{ Request::is('report/cari*') ? $from : ''}}</h4>
                        <h4> Sampai Tanggal : {{ Request::is('report/cari*') ? $to : ''}}</h4>

                    </div>


            <table style="margin-top: 100px" class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                       <th> Keterangan </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @if ($absen)
                    @foreach ($absen as $a)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $a->siswa->nama}}</td>
                        <td> {{$a->keterangan}} </td>
                      
                    </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
