<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Portal Management >>
    public function datatask_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Task::with('user', 'project')
            ->where('taskname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Tasks.datatask', compact('data'));
    }

    public function tambahdatatask_admin()
    {
        $projects = project::all();
        $user = User::all();
        return view('Tasks.tambahdatatask', compact('projects', 'user'));
    }

    public function insertdatatask_admin(Request $request)
    {
        Task::create($request->all());
        return redirect('datatask_admin')->with('success', 'task added successfully .');
    }

    public function editdatatask_admin($id)
    {
        $projects = project::all();
        $user = User::all();
        $data = Task::find($id);
        return view('Tasks.tampildatatask', compact('data', 'user', 'projects'));
    }

    public function updatedatatask_admin(Request $request, $id)
    {
        $data = Task::find($id);
        $data->update($request->all());
        return redirect('datatask_admin')->with('success', 'task update successfully .');
    }

    public function deletedatatask_admin($id)
    {
        $data = Task::find($id);
        $data->delete();
        return redirect('datatask_admin')->with('success', 'task deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Project::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Tasks.datatask-pdf');
        return $pdf->download('data.pdf');
    }

    // Portal Employee >>
    public function datatask_employee(Request $request)
    {
        $keyword = $request->keyword;
        $data = Task::with('user', 'project')
            ->where('taskname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Tasks.datatask_employee', compact('data'));
    }

    public function tambahdatatask_employee()
    {
        $projects = project::all();
        $user = User::all();
        return view('Tasks.tambahdatatask_employee', compact('projects', 'user'));
    }

    public function insertdatatask_employee(Request $request)
    {
        Task::create($request->all());
        return redirect('datatask_employee')->with('success', 'task added successfully .');
    }

    public function editdatatask_employee($id)
    {
        $projects = project::all();
        $user = User::all();
        $data = Task::find($id);
        return view('Tasks.editdatatask_employee', compact('data','projects', 'user'));
    }

    public function updatedatatask_employee(Request $request, $id)
    {
        $data = Task::find($id);
        $data->update($request->all());
        return redirect('datatask_employee')->with('success', 'task update successfully .');
    }

    public function deletedatatask_employee($id)
    {
        $data = Task::find($id);
        $data->delete();
        return redirect('datatask_employee')->with('success', 'task deleted successfully .');
    }

    // Portal Client >>
    public function datatask_client(Request $request)
    {
        $keyword = $request->keyword;
        $data = Task::with('user', 'project')
            ->where('taskname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Tasks.datatask_client', compact('data'));
    }
}
