<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(!Auth::check()){
            return redirect('/');
        }
        $absens = Absensi::orderby('id_absensi','desc')->get();
        $absennow = Absensi::where('tanggal', Carbon::now()->format('Y/m/d'))->get();
        return view('index', compact('absens','absennow'));
    }
    public function absen()
    {

        if(!Auth::check()){
            return redirect('/');
        }
        $today = Carbon::now()->format('Y/m/d');
        $loop = [];
        $s = Siswa::rightJoin('absensis', 'siswas.id_siswa', '=', 'absensis.id_siswa')->where('tanggal', $today)->get();
        foreach($s as $ss => $value){
            $loop[] = $value->nama;
        }
        $siswa = Siswa::whereNotIn('nama',$loop)->get();
        $tgl = Carbon::now();
    
        return view('absen', compact('siswa', 'tgl', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        // dd($request);
        $request->validate([
            'id_siswa' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required'
        ]);
        Absensi::create($request->all());
        Alert::success('Success', 'Data berhasil Di BUat');
        return redirect('/');
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
    public function edit($id_absensi)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $today = Carbon::now()->format('Y/m/d');
        $loop = [];
        $s = Siswa::rightJoin('absensis', 'siswas.id_siswa', '=', 'absensis.id_siswa')->where('tanggal', $today)->get();
        foreach($s as $ss => $value){
            $loop[] = $value->nama;
        }
        $siswa = Siswa::whereNotIn('nama',$loop)->get();
        $tgl = Carbon::now();
        $absen = Absensi::where('id_absensi',$id_absensi)->first();
        // dd($absen->id_siswa);
         return view('edit', compact('absen', 'tgl','siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_absensi)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        $absen = Absensi::findOrFail($id_absensi);
        // dd($absen);
        $absen->update($request->all());
        Alert::success('Success', 'Data berhasil Di Update');
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_absensi)
    {
        $absen = Absensi::where('id_absensi',$id_absensi)->first();
        // dd($absen);
        $absen->delete($absen);
        Alert::success('Success', 'Data berhasil dihapus');
        return back();
    }

    public function report(){
        if(!Auth::check()){
            return redirect('/');
        }
        $m = Siswa::get();
        $from = '2022-06-01';
        $to = '2023-06-01';
        $absen = Absensi::get();
        return view('report', compact('m','from','to'));
    }
    public function reportsearch(Request $request){
        if(!Auth::check()){
            return redirect('/');
        }
        $from = $request->from;
        $to = $request->to;
        // dd($cari);
        // $absen = Absensi::->where('id_siswa', $id_siswa)->whereBetween('tanggal', [$from,$to])->get();
        $m = Siswa::get();
        // $from = '2022-10-05';
        // $to = Carbon::now()->format('Y/m/d');
        $absen = Absensi::get();
        return view('report', compact('m', 'absen', 'from', 'to'));
    }
}
