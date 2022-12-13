@extends('layout.main')

@section('title')
<title>Cakra | Data admin</title>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h4>Data Admin</h4>
            <a href="/admin/create" class="btn text-white btn-success mr-4"> <i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
        </div>    
    
    <div class="card-body">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d) 
            
                <tr>
                    <td>{{ $d->id_admin }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->username }}</td>
                    <td> 
                        <a href="/admin/{{ $d->username }}" class="btn text-white btn-warning"><i class="fa fa-pen" aria-hidden="true"></i></a>    
                        <a href="/admin/{{ $d->username }}/delete" class="btn text-white btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>    
                </td>
                    <!-- <td>{{ $d->email }}</td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>@endsection