<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function dataproject_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = project::where('projectname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = project::paginate(5);
        }
        return view('Projects.dataproject', compact('data'));
    }

    public function tambahdataproject()
    {
        return view('Projects.tambahdataproject');
    }

    public function insertdataproject(Request $request)
    {
        project::create($request->all());
        return redirect('dataproject_admin')->with('success', 'project added successfully .');
    }

    public function editdataproject($id)
    {
        $data = project::find($id);
        return view('Projects.tampildataproject', compact('data'));
    }

    public function updatedataproject(Request $request, $id)
    {
        $data = project::find($id);
        $data->update($request->all());
        return redirect('dataproject_admin')->with('success', 'project data update successfully .');
    }

    public function deletedataproject($id)
    {
        $data = project::find($id);
        $data->delete();
        return redirect('dataproject_admin')->with('success', 'project data deleted successfully .');
    }

    //Employee
    public function dataproject_employee(Request $request)
    {
    if ($request->has('search')) {
    $data = project::where('projectname', 'LIKE', '%' . $request->search . '%')->paginate(5);
    } else {
    $data = project::paginate(5);
    }
    return view('Projects.dataproject_employee', compact('data'));
    }

    // Portal Client >>
    public function dataproject_client(Request $request)
    {
    if ($request->has('search')) {
    $data = project::where('projectname', 'LIKE', '%' . $request->search . '%')->paginate(5);
    } else {
    $data = project::paginate(5);
    }
    return view('Projects.dataproject_client', compact('data'));
    }
}
