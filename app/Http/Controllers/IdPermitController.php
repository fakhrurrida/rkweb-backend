<?php

namespace App\Http\Controllers;
use App\Models\IdPermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IdPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return IdPermit::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nama'      => 'required',
            'nrp'     => 'required',
            'sub_kontraktor'  => 'required',
            'jabatan'  => 'required',
            'pas_foto'  => 'required',
            'kompetensi'  => 'required',
            'status'  => 'required',
            'masa_berlaku'  => 'required',
            'aktivitas_terakhir' => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create user
        $id_permit = IdPermit::create([
            'nama'      => $request->nama,
            'nrp'     => $request->nrp,
            'sub_kontraktor'  => $request->sub_kontraktor,
            'jabatan'  => $request->jabatan,
            'pas_foto'  => $request->pas_foto,
            'kompetensi'  => $request->kompetensi,
            'status'  => $request->status,
            'masa_berlaku'  => $request->masa_berlaku,
            'aktivitas_terakhir' => $request->aktivitas_terakhir
        ]);

        //return response JSON user is created
        if($id_permit) {
            return response()->json([
                'success' => true,
                'user'    => $id_permit,  
            ], 201);
        }

        //return JSON process insert failed 
        return response()->json([
            'success' => false,
        ], 409);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
