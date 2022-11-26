<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4" >
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
                        <button class="btn btn-dark MT-4" type="submit">SUBMIT</button>
    </form>
</div>
</body>
</html>
