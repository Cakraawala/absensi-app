<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
    {{-- <title>Document</title> --}}
</head>
<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h4 align="center">Edit data Siswa {{ $siswa->nama }} / #{{ $siswa->id_siswa }}</h4>
            </div>
            <div class="card-body">

                <form action="/siswa/{{ $siswa->id_siswa }}/update" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama" class="mt-2 form-label"> Nama Siswa <span style="font-style: italic;">(required)</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" autofocus value="{{ $siswa->nama }}">

                                <label for="email" class="mt-3 form-label"> Email <span style="font-style: italic;">(required)</span></label>
                                <input type="text" class="form-control" name="email" id="email" autofocus value="{{ $siswa->email }}">
                                <label for="notelp" class="mt-2 form-label"> No Telepon <span style="font-style: italic;">(required)</span></label>
                                <input type="number" class="form-control" name="notelp" id="notelp" autofocus value="{{ $siswa->notelp }}">
                            </div>

                            <div class="col-md-6">
                                    <label for="alamat" class="mt-1 form-label"> Alamat <span style="font-style: italic;">(required)</span></label>
                                    <textarea name="alamat" id="alamat" cols="30" class="form-control" rows="8">{{ $siswa->alamat }}</textarea>
                            </div>


                        </div>
                                <button class="btn btn-dark MT-4" type="submit">SUBMIT</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
