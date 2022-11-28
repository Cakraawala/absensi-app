@extends('layout.main')

@section('title')
<title>Absens</title>
@endsection
@section('content')

<div class="container mt-4" >
    <div class="card">
        <div class="card-header">
            Absen {{ $tgl->format('D d/m/Y')}}
        </div>
        <div class="card-body">
        <form action="/absen/post" method="POST">
            @csrf
                    <label for="siswa" class="mt-2 form-label"> Nama Siswa <span style="font-style: italic;">(required)</span></label>
                        <select class="form-select" name="id_siswa" id="siswa">
                            @foreach ($siswa as $s)
                            <option value="{{ $s->id_siswa }}">{{$s->nama}}</option>
                            @endforeach
                        </select>

                        <label for="Ket" class="mt-2 form-label">Keterangan <span style="font-style: italic;">(required)</span></label>
                        <select class="form-select" name="keterangan" id="Ket">
                          <option value="">Pilih Keterangan</option>
                          <option value="Sakit">Sakit</option>
                          <option value="Ijin">Ijin</option>
                          <option value="Alfa">Alfa</option>
                        </select>
                        {{-- <label for="tanggal" class="mt-2 form-label">Tanggal <span style="font-style: italic;">(required)</span></label>
                        <input type="date" class="mt-2 form-control" id="tanggal" name ='tanggal' required > --}}

                        <label for="tanggal" class="mt-2 form-label">Tanggal <span style="font-style: italic;">(required)</span></label>
                        <input type="text" value="{{ $tgl->isoFormat("ddd D-M-Y")}}" disabled class="mt-2 form-control"  id="tanggal">

                        <input type="text" value="{{ $tgl }}" hidden class="mt-2 form-control" name ="tanggal" >
                        <button class="btn btn-dark mt-4" type="submit">SUBMIT</button>
    </form>
        </div>
    </div>
</div>
@endsection
