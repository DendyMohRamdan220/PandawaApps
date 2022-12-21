<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function dataproject_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Project::with('user')
            ->where('projectname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('user_id1', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Projects.dataproject', compact('data'));
    }

    public function tambahdataproject()
    {
        $user = User::all();
        return view('Projects.tambahdataproject', compact('user'));
    }

    public function insertdataproject(Request $request)
    {
        project::create($request->all());
        return redirect('dataproject_admin')->with('success', 'project added successfully .');
    }

    public function editdataproject($id)
    {
        $user = User::all();
        $data = project::find($id);
        return view('Projects.tampildataproject', compact('data', 'user'));
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

    public function exportpdf_admin()
    {
        $data = Project::with('user')->get();
        view()->share('data', $data);
        $pdf = PDF::loadview('Projects.dataproject-pdf');
        return $pdf->download('data-project.pdf');
    }

    //Employee
    public function dataproject_employee(Request $request)
    {
        $keyword = $request->keyword;
        $data = Project::with('user')
            ->where('projectname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('user_id1', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Projects.dataproject_employee', compact('data'));
    }

    // Portal Client >>
    public function dataproject_client(Request $request)
    {
        $keyword = $request->keyword;
        $data = Project::with('user')
            ->where('projectname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('user_id1', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Projects.dataproject_client', compact('data'));
    }
}
