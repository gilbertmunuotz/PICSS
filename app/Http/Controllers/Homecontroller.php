<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use App\Models\User;
use App\Models\Problems;
use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{

    public function redirecting()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('staff.index');
            } elseif (Auth::user()->usertype == '1') {
                return view('estateoffice.index');
            } else {
                return view('admin.index');
            }
        }
    }

    public function show_probz()
    {
        $data = Problems::all();

        return view('staff.showprob',compact('data'));
    }


    public function registers()
    {
        return view('staff.registersheet');
    }

    public function device_register(Request $request)
    {
        $user = User::find($request->id);

        $device = new Devices;
        $device->itemname = $request->itemname;
        $device->codeno = $request->codeno;
        $device->office = $request->office;
        $device->dateofregistration = $request->dateofregistration;
        $device->save();

        return redirect()->back()->with('message', 'Device Registered Succesfully');
    }

    public function report()
    {
        return view('staff.reportproblem');
    }

    public function reporting_problems(Request $request)
    {

        $user = User::find($request->id);

        $problem = new Problems;
        $problem->name = $request->name;
        $problem->department = $request->department;
        $problem->dateofreport = $request->dateofreport;
        $problem->problemtype = $request->problemtype;
        $problem->problemdescription = $request->problemdescription;
        $problem->save();

        return redirect()->back()->with('message', 'Reported Succesful');
    }

    public function requesting()
    {
        return view('staff.requests');
    }

    public function registers_requests(Request $request)
    {

        $user = User::find($request->id);

        $requesting = new Requests;
        $requesting->name = $request->name;
        $requesting->department = $request->department;
        $requesting->dateofrequests = $request->dateofrequests;
        $requesting->devicename = $request->devicename;
        $requesting->devicedescription = $request->devicedescription;
        $requesting->save();

        return redirect()->back()->with('message', 'Requested Succesfully');
    }

    
    public function updatestatus(Request $request, $id)
    {

        $mydevices = Devices::find($id);

        $mydevices->itemname = $request->itemname;

        $mydevices->codeno = $request->codeno;

        $mydevices->office = $request->office;

        $mydevices->dateofregistration = $request->dateofregistration;

        $mydevices->status = $request->status;

        $mydevices->save();

        return redirect()->back()->with('message', 'Updated Succesful');
    }


}
