@extends('layout.main')
@section('title')
<title> Cakra | Data siswa </title>
@endsection
@section('content')

<div class="container" style="margin-bottom: 100px">
<div class="card">
    <div class="card-header">
    <div class="d-flex justify-content-between">
                <h4>Data Siswa</h4>
            <a href="/siswa/create" class="btn text-white btn-success mr-4"> <i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
    </div>
    <div class="card-body">
        
        <Table class="table mt-4 table-bordered mb-4" style="margin-bottom: 100px" id="myTable">
        <thead>
            <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
        </thead>    
        <tbody>
            @foreach ($siswa as $s)
               <tr>
                   <td width=5%>{{ $s->id_siswa }}</td>
                   <td  width=25%> {{ $s->nama }}</td>
                   <td width=15%> {{ $s->email }}</td>
                   <td width=15%> {{ $s->notelp}}</td>
                   <td> {{ $s->alamat }}</td>
                   <td width=10%>
                    <div class="d-flex">
                        <a href="/absen/{{ $s->id_siswa }}/edit" class="btn btn-warning text-white"><i class="fa fa-pen" aria-hidden="true"></i></a>
                        <a href="/siswa/{{ $s->id_siswa }}/delete"  onclick="return confirm('Apakah kamu yakin ingin menghapus data?')" class="ms-2 btn btn-danger text-white"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                   </td>
               </tr>
               @endforeach
        </tbody>   
        </Table>
    </div>
</div>
</div>
@endsection
