@extends('layout.main')

@section('title')
<title>Cakra | Tambah admin</title>
@endsection
@section('content')
   
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h4 align="center">Tambah Admin</h4>
        </div>
        <div class="card-body">

            <form action="/admin" method="POST">
                @csrf
                    <div class="row">
                        <div class="d-flex">
                            <div class="col-md-6">
                                <label for="nama" class="mt-2 form-label"> Nama <span style="font-style: italic;">(required)</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" autofocus>
                            </div>
                               <div class="col-md-6">
                                   <label for="username" class="mt-2 form-label"> Username <span style="font-style: italic;">(required)</span></label>
                                   <input type="text" class="form-control" name="username" id="username" >
                               </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-md-12">
                                <label for="password" class="mt-3 form-label"> Password <span style="font-style: italic;">(required)</span></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="********">
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="mr-2">
                        <button class="float-right btn btn-dark mt-4" type="submit">SUBMIT</button>
                    </div>
        </form>
        </div>
    </div>
</div>
@endsection