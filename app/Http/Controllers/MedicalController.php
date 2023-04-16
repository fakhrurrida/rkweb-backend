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
        $medical = Medical::where('nrp', $nrp)->get();
        return $medical;
    }

    public function uploadHasilMCU(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nrp'      => 'required',
            'csv_hasil_mcu' => 'required|file|mimes:csv,txt',
            'hasil'  => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Get the file from the request
        $file = $request->file('csv_hasil_mcu');

        // Get the contents of the file
        // $contents = Storage::get($file->path());

        //create medical
        $medical = Medical::create([
            'nrp' => $request->nrp,
            'mcu_csv_file' => $file,
            'hasil' => $request->hasil
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
