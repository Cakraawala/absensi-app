@extends('LAYOUT.MAIN')
@section('title')
<title> Cakra | Create SISWA </title>
@endsection
@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h4 align="center">Tambah Siswa</h4>
        </div>
        <div class="card-body">

            <form action="/siswa" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama" class="mt-2 form-label"> Nama Siswa <span style="font-style: italic;">(required)</span></label>
                            <input type="text" class="form-control" name="nama" id="nama" autofocus placeholder="Jamal">

                            <label for="email" class="mt-3 form-label"> Email <span style="font-style: italic;">(required)</span></label>
                            <input type="text" class="form-control" name="email" id="email" autofocus placeholder="Jamal@gmail.com">
                            <label for="notelp" class="mt-2 form-label"> No Telepon <span style="font-style: italic;">(required)</span></label>
                            <input type="number" class="form-control" name="notelp" id="notelp" autofocus placeholder="0869696969">
                        </div>

                        <div class="col-md-6">
                                <label for="alamat" class="mt-1 form-label"> Alamat <span style="font-style: italic;">(required)</span></label>
                                <textarea name="alamat" id="alamat" cols="30" class="form-control" rows="8"></textarea>
                        </div>


                    </div>
                            <button class="btn btn-dark mt-4" type="submit">SUBMIT</button>
        </form>
        </div>
    </div>
</div>
@endsection
