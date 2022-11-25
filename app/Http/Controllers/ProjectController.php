<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = project::where('projectname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = project::paginate(5);
        }
        return view('/dataproject', compact('data'));
    }

    public function tambahproject()
    {
        return view('tambahdataproject');
    }

    public function insertdataproject(Request $request)
    {
        project::create($request->all());
        return redirect()->route('project')->with('success', 'project added successfully .');
    }

    public function tampildataproject($id)
    {
        $data = project::find($id);
        return view('tampildataproject', compact('data'));
    }

    public function updatedataproject(Request $request, $id)
    {
        $data = project::find($id);
        $data->update($request->all());
        return redirect()->route('project')->with('success', 'project data update successfully .');
    }

    public function deleteproject($id)
    {
        $data = project::find($id);
        $data->delete();
        return redirect()->route('project')->with('success', 'project data deleted successfully .');
    }
}
