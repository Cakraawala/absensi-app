@extends('layout.main')
@section('title')
<title> Data siswa </title>
@endsection
@section('content')

<div class="container" style="margin-bottom: 100px">
    <h3> DATA SISWA </h3>
    <Table class="table mt-4 table-bordered mb-4" style="margin-bottom: 100px">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
       @foreach ($siswa as $s)
       <tr>
           <td width=5%>{{ $s->id_siswa }}</td>
           <td  width=25%> {{ $s->nama }}</td>
           <td width=15%> {{ $s->email }}</td>
           <td width=15%> {{ $s->notelp}}</td>
           <td> {{ $s->alamat }}</td>
           <td width=10%>
            <div class="d-flex">
                <a href="/siswa/{{ $s->id_siswa }}" class="btn btn-outline-secondary">EDIT</a>
                <a href="/siswa/{{ $s->id_siswa }}/delete" class="ms-2 btn btn-outline-danger">DELETE</a>
            </div>
           </td>
       </tr>
       @endforeach
    </Table>
</div>
@endsection
