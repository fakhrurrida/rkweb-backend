<?php

namespace App\Http\Controllers;
use App\Models\Medical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medical::all();
    }

    public function getMedical(Request $request)
    {
        $nrp = $request['nrp'];
        $medical = Medical::where('user_id', $nrp)->get();
        return $medical;
    }

    public function uploadHasilMCU(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            // 'tanggal'      => 'required',
            // 'csv_hasil_mcu' => 'required|file|mimes:csv,txt',
            'diagnosa'  => 'required',
            'terapi' => 'required',
            'izin_sakit_dalam_hari' => 'required',
            'nrp' => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Get the file from the request
        // $file = $request->file('csv_hasil_mcu');

        // Get the contents of the file
        // $contents = Storage::get($file->path());

        //create medical
        $medical = Medical::create([
            'tanggal' => $request->tanggal,
            'diagnosa' => $request->diagnosa,
            'terapi' => $request->terapi,
            'izin_sakit_dalam_hari' => $request->izin_sakit_dalam_hari,
            'user_id' => $request->nrp
            // 'nrp' => $request->nrp,
            // 'mcu_csv_file' => $file,
            // 'hasil' => $request->hasil
        ]);

        //return response JSON user is created
        if($medical) {
            return response()->json([
                'success' => true,
                'hasil_mcu' => $medical,  
            ], 201);
        }

        //return JSON process insert failed 
        return response()->json([
            'success' => false,
        ], 409);
    }
}
