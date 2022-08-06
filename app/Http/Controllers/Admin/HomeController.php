<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Placement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $placements = Placement::all();
        return view('admin.dashboard',['placements'=>$placements]);
    }

    
}
