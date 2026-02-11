<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    // TAMPILKAN DATA
    public function index()
    {
        $sensors = DB::table('sensors')->get();
        return view('sensor.index', compact('sensors'));
    }

    // FORM TAMBAH DATA
    public function create()
    {
        return view('sensor.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
{
    DB::table('sensors')->insert([
        'nama_sensor' => $request->nama_sensor,
        'tipe_sensor' => $request->tipe_sensor,
        'nilai'       => $request->nilai,
        'status'      => 0,
        'created_at'  => now(),
        'updated_at'  => now()
    ]);

    return redirect()->route('sensor.index')
                     ->with('success', 'Data berhasil ditambahkan');
}

public function update(Request $request , $id)
{
    DB::table('sensors')
    ->where('id', $id)
    ->update([
        'nama_sensor' => $request->nama_sensor,
        'data' => $request->data,
        'updated_at' => now(),
    ]);
    return 'Berhasil mengupdate data';
}

public function destroy($id)
{
Sensor::destroy($id);
return redirect('/')->with('succes','pesan berhasil dihapus');
}
}
