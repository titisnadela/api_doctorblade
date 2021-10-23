<?php

namespace App\Http\Controllers;

use App\Models\Doctorblade;
use Illuminate\Http\Request;

class DoctorbladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Doctorblade::all();
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
            'tanggal/jam' => 'required',
            'nik' => 'required',
            'mesin' => 'required',
            'panjang' => 'required'
        ]);
        return Doctorblade::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Doctorblade::find($id);
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
        $doctorblade = Doctorblade::find($id);
        $doctorblade->update($request->all());
        return $doctorblade;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Doctorblade::destroy($id);
    }
    /**
     * Search for a nik
     *
     * @param  str $nik
     * @return \Illuminate\Http\Response
     */
    public function search($nik)
    {
        return Doctorblade::where('nik', 'like', '%'.$nik. '%')->get();
    }
}
