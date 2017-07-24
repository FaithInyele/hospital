<?php

namespace App\Http\Controllers;

use App\Immunize;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    public function immunization(Request $request)
    {
        $immunization = new Immunize($request->all());
        $immunization->save();

        return redirect('/immunize')->with('status', '   Successfully Added');
    }

    public function showimmunization()
    {
        $immunizations = Immunize::all();
        return view('tables.checkup', compact('immunizations'));
    }
}
