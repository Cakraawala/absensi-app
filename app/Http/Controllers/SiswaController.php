<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect('/');
        }
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $request->validate([
            'nama' => 'required',
            'email' => 'nullable',
            'notelp' => 'nullable',
            'alamat' => 'nullable'
        ]);
        Siswa::create($request->all());
        return redirect('/siswa');
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_siswa)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $siswa = Siswa::findOrFail($id_siswa);
        // dd($siswa);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_siswa)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $siswa = Siswa::findOrFail($id_siswa);
        $siswa->update($request->all());
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_siswa)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $siswa = Siswa::findOrFail($id_siswa);
        // dd($siswa);
        $siswa->delete($siswa);
        return back();
    }
}
