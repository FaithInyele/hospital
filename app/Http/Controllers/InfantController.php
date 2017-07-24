<?php

namespace App\Http\Controllers;

use App\InfantDetail;
use Illuminate\Http\Request;

class InfantController extends Controller
{
    public function infant(Request $request)
    {
        $infant = new InfantDetail($request->all());
        $infant->save();

        return redirect('/infantdetails')
            ->with('status', $infant->first_name . '   Successfully Added')
            ->with('infant', $infant);
    }

    public function showinfant()
    {
        $infants = InfantDetail::all();
        return view('tables.infantmaster', compact('infants'));
    }

    public function reportinfant()
    {
        $report = InfantDetail::all();
        return view('reports.infantmaster', compact('report'));
    }

    public function delete($id)
    {
        $infant = InfantDetail::findorFail($id);
        $infant->delete();
        return redirect('/infantmaster')->with('status', $infant->first_name . '   Successfully deleted');

    }

    public function edit(Request $request)
    {
        $infant = InfantDetail::findorFail($request->id);
        $infant->update($request->all());
        return redirect('/infantmaster')->with('status', $infant->first_name . '   Successfully Edited');

    }

    public function referred()
    {
        $infant = InfantDetail::where('special_needs','yes')->get();

        return view('/reports.reports', ['infants'=>$infant]);
    }

    public function getInfantsWithSpecialNeeds()
    {
        $report = InfantDetail::where('special_needs', 'yes')->get();
        return view('/reports.infantmaster', compact('report'));
    }
    public function femaleinfants()
    {
        $infant = InfantDetail::where('gender','female')->get();

        return view('/reports.reports', ['infants'=>$infant]);
    }
    public function maleinfants()
    {
        $infant = InfantDetail::where('gender','male')->get();

        return view('/reports.reports', ['infants'=>$infant]);
    }
}
