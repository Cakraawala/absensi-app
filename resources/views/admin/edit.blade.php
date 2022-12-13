@extends('layout.main')

@section('title')
<title>Cakra | {{ $user->nama }}</title>
@endsection
@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h4 align="center">Edit Data {{ $user->username }}</h4>
        </div>
        <div class="card-body">

            <form action="/admin/{{ $user->username }}/update" method="POST">
                @csrf
                    <div class="row">
                        <div class="d-flex">
                            <div class="col-md-6">
                                <label for="nama" class="mt-2 form-label"> Nama <span style="font-style: italic;">(required)</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ $user->nama }}">
                            </div>
                               <div class="col-md-6">
                                   <label for="username" class="mt-2 form-label"> Username <span style="font-style: italic;">(required)</span></label>
                                   <input type="text" class="form-control" name="username" value="{{ $user->username }}" id="username" >
                               </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-md-12">
                                <div class="mr-2">
                                 <button class="float-right btn btn-dark mt-4" type="submit">SUBMIT</button>
                               </div>
                              
                                </div>
                            </form>
                            </div>
                            <div class="container mb-4">
                            <h5 class= "ml-2"> Change Password </h5>
                                <div class="d-flex">
                                    <div class="col-md-6"> 
                                        <form action="/admin/{{ $user->username }}/changepassword" method="post">
                                            @csrf
                                            <label for="oldpassword" class="mt-2 form-label"> Old Password </label>
                                                <input type="password" class="form-control" value=" {{ $user->password }}" id="oldpassword" placeholder="********">
                                            <label for="password" class="mt-3 form-label"> New Password </label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="********">
                                        </div>
                                    </div>
                                    <div class="mr-3">
                                        <button class="float-right btn btn-dark mt-4" type="submit">CHANGE</button>
                                    </div>
                                </form>                               
                            </div>
                             
                        <!-- </div> -->
                    </div>
                   
        </div>
    </div>
</div>
@endsection