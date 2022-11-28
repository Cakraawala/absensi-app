<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // dd($users);


        // dd($loop);
        // $chart1 = Absensi::orderBy('id_absensi', 'asc')->get()->groupby(function ($chart1) {
        //     return Carbon::parse($chart1->tanggal)->format('M');
        // });

        // $months = [];
        // foreach($chart1 as $month => $value){
        //     $months[] = $month;
        //     // $p = [];
        //     // foreach($value as $sp => $value1){
        //     //     $p[] = $value1->tanggal;
        //     // }
        // }
        // // dd($p);
        // $reportmonth = Absensi::where('tanggal', $months)->get();

        // dd($reportmonth);
        // dd($chart1);
        // dd($loop);
        // $tes = Siswa::whereRaw('nama NOT IN(".$loop")')->get();
        // dd($tes);

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function report(){
        if(!Auth::check()){
            return redirect('/');
        }
        $absen = Absensi::get();
        return view('report', compact('absen'));
    }
    public function reportsearch(Request $request){
        if(!Auth::check()){
            return redirect('/');
        }
        $from = $request->from;
        $to = $request->to;
        // dd($cari);
        $absen = Absensi::whereBetween('tanggal', [$from,$to])->get();
        $siswa = [];
        foreach($absen as $tes => $value){
            $siswa[] = $value->siswa->nama;

        }
        // dd($siswa[0]);
        $s = Siswa::rightJoin('absensis', 'siswas.id_siswa', '=', 'absensis.id_siswa')->whereBetween('tanggal', [$from, $to])->where('nama', $siswa)->where('keterangan', 'Ijin')->count();
        // dd($siswa);
        return view('report', compact('absen', 'request', 'from', 'to'));
    }
}
