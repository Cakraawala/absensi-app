<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-bottom: 100px">
        <a href="/" class="btn btn-outline-dark">Back</a>
        <a href="/siswa/create" class="btn btn-outline-dark">Create</a>
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
                <a href="" class="btn btn-outline-secondary"></a>
               </td>
           </tr>
           @endforeach
        </Table>
    </div>
</body>
</html>
