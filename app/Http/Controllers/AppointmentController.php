<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment(Request $request)
    {
        $appointment = new Appointment($request->all());
        $appointment->save();

        return redirect('/appointments')->with('status','  Appointment Successfully Added');
    }
    public function getappointment()
    {
        $appointment = Appointment::all();
        return view('tables.viewappointment', compact('appointment'));
    }
}
