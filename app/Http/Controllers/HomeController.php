<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Tehsil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $divisions = Division::all();
        $districts = District::all();
        $tehsils = Tehsil::all();
        $crops = ['Wheat', 'Sugar'];
        return view('page1.page1', compact('divisions', 'districts', 'tehsils', 'crops'));
    }
}
