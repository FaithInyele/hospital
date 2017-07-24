<?php

namespace App\Http\Controllers;

use App\ParentDetail;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function parent(Request $request){
        $parent = new ParentDetail($request->all());
        $parent->save();

        return redirect('/parentdetails')->with('status',  ' Information Successfully Added');
    }
}
