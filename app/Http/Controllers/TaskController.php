<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use App\Models\project;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Portal Management >>
    public function datatask_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Task::where('taskname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Task::paginate(5);
        }
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
        $user = User::all();
        $data = Task::find($id);
        return view('Tasks.tampildatatask', compact('data', 'user'));
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

    // Portal Employee >>
    public function datatask_employee(Request $request)
    {
        if ($request->has('search')) {
            $data = Task::where('taskname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Task::paginate(5);
        }
        return view('Tasks.datatask_employee', compact('data'));
    }

    // Portal Client >>
    public function datatask_client(Request $request)
    {
        if ($request->has('search')) {
            $data = Task::where('taskname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Task::paginate(5);
        }
        return view('Tasks.datatask_client', compact('data'));
    }
}