<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use App\Models\Problems;
use App\Models\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Staffcontroller extends Controller
{
    public function homee()
    {
        return view('estateoffice.index');
    }

    public function devices()
    {
        $data = devices::all();

        return view('estateoffice.devices', compact('data'));
    }

    public function edit_devices(Request $request, $id)
    {

        $edit = Devices::find($id);

        return view('estateoffice.editdev', compact('edit'));
    }

    public function tasks()
    {
        $task = Problems::all();

        return view('estateoffice.tasks', compact('task'));
    }

    public function edit_tasks(Request $request, $id)
    {
        $ytasks = Problems::find($id);

        return view('estateoffice.edittask', compact('ytasks'));
    }

    public function update_mytask(Request $request, $id)
    {

        $mytasks = Problems::find($id);

        $mytasks->name = $request->name;

        $mytasks->department = $request->department;

        $mytasks->dateofreport = $request->dateofreport;

        $mytasks->problemtype = $request->problemtype;

        $mytasks->problemdescription = $request->problemdescription;

        $mytasks->statuses = $request->statuses;

        $mytasks->save();

        return redirect()->back()->with('message', 'Updated Succesfully');
    }

    public function delete_tasks(Request $request, $id)
    {

        $data = Problems::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Deleted Succesfully');
    }

    public function requested_devices()
    {

        $device = Requests::all();

        return view('estateoffice.reqdevices', compact('device'));
    }

    public function mydevices(Request $request, $id)
     {
    
        $alldevices = Requests::find($id);

        return view('estateoffice.reqdevs', compact('alldevices'));

    }
  
}
