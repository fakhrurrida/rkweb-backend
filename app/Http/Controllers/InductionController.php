<?php

namespace App\Http\Controllers;
use App\Models\Induction;
use Illuminate\Http\Request;

class InductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Induction::all();
    }
}
