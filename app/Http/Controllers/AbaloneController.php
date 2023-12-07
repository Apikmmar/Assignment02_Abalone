<?php

namespace App\Http\Controllers;

use App\Models\Abalone;
use Illuminate\Http\Request;

class AbaloneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abalone_data = Abalone::all();

        return view('index', compact('abalone_data'));
    }

    /**
     * Display a listing of the resource based on gender filter.
     */
    public function filterGender(Request $request) {
        $sex = $request->sex;
        $abalone_data = Abalone::where('sex', $sex)->get();

        return view('index', compact('abalone_data'));
    }

    /**
     * Display a listing of the resource based on gender filter.
     */
    public function filterRings(Request $request) {
        $show = $request->show;
        $abalone_data = Abalone::orderBy('rings', $show)->get();
    
        return view('index', compact('abalone_data'));
    }
    
}
