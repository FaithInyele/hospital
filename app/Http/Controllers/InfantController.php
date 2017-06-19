<?php

namespace App\Http\Controllers;

use App\InfantDetail;
use Illuminate\Http\Request;

class InfantController extends Controller
{
    public function infant(Request $request){
        $infant = new InfantDetail($request->all());
        $infant->save();

        dd('haha');
    }
}
