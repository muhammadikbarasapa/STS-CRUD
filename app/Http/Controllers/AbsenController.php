<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Absen = Absen::all();

        return view('Absensi.index', compact('Absen'));
    }


    public function create()
    {
        //
        return view('Absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
  {
      
      $request->validate([
         'nama_pemain' => 'required|min:3',
         'attendance_status' => 'required',
         'date' => 'required',
         'time' => 'required',
     ]);
 
     $proses = Absen::create([
         'nama_pemain' => $request->nama_pemain,
         'attendance_status' => $request->attendance_status,
         'date' => $request->date,
         'time' => $request->time,
     ]);

     if ($proses) {
         return redirect()->route('Absen.index')->with('success', 'Data Berhasil');
     }
  }


    /**
     * Display the specified resource.
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $Absen = Absen::find($id);
        return view('Absensi.edit', compact('Absen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        //
        $request->validate([
            'nama_pemain' => 'required|min:3',
            'attendance_status' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);
    
        $proses = Absen::create([
            'nama_pemain' => $request->nama_pemain,
            'attendance_status' => $request->attendance_status,
            'date' => $request->date,
            'time' => $request->time,
        ]);
   
        if ($proses) {
            return redirect()->route('Absen.index')->with('success', 'Data Berhasil');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen $absen)
    {
        //
        Absen::where('id', $absen->id)->delete();
        return redirect()->route('Absen.index')->with('success', 'Data Berhasil');
    }

}
