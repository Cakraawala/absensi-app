@extends('layout.main')

@section('title')
<title> Cakra | Report </title>
<style>
    @media print{
       .sticky-footer,.waktu,.heder,.btn{display: none;}
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
                    <div class="mt-2">
                    <h3 style="text-align : center;margin-bottom:30px;"> Laporan Absensi </h3>
                        <h6> Dari Tanggal : {{$from}}</h6>
                        <h6> Sampai Tanggal : {{$to}}</h6>
                    </div>


            <div class="MyTable">

                <table style="margin-top: 20px" class="table table-bordered" >
            </div>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                       <th> Ijin </th>
                       <th> Sakit </th>
                       <th> Alfa </th>
                     </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @if ($m)
                    @foreach ($m as $a)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $a->nama}}</td>
                        <td>@if($a->absensis->where('keterangan', 'Ijin')->whereBetween('tanggal', [$from,$to])->count() == 0) - @else {{ $a->absensis->where('keterangan', 'Ijin')->whereBetween('tanggal', [$from,$to])->count() }} @endif </td>
                        <td>@if($a->absensis->where('keterangan', 'Sakit')->whereBetween('tanggal', [$from,$to])->count() == 0) - @else {{ $a->absensis->where('keterangan', 'Sakit')->whereBetween('tanggal', [$from,$to])->count() }} @endif</td>
                        <td>@if($a->absensis->where('keterangan', 'Alfa')->whereBetween('tanggal', [$from,$to])->count() == 0) - @else {{ $a->absensis->where('keterangan', 'Alfa')->whereBetween('tanggal', [$from,$to])->count() }} @endif</td>
                       
                      
                    </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
