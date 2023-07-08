<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id_admin;
        $data = User::whereNotIn('id_admin', [$id])->get();
        // dd($data);
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        Alert::success('success', 'Data berhasil dibuat');
        return redirect('/admin');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        Alert::success('Success', 'Edit data berhasil');
        return redirect('/admin');

    }
    public function changepassword(Request $request, User $user)
    {
        // dd($request);
        $request->validate([
            'password'=> 'required'
        ]);
        $user->update($request->all());
        Alert::success('Success', 'Edit data berhasil');
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user);
        $user->delete($user);
        Alert::success('Success', 'Hapus data berhasil');
        return back();
    }
}
