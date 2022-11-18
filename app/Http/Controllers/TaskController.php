<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Task::where('taskname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Task::paginate(5);
        }
        return view('Tasks.datatask', compact('data'));
    }

    public function tambahtask()
    {
        return view('Tasks.tambahdatatask');
    }

    public function insertdatatask(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('task')->with('success', 'task added successfully .');
    }

    public function tampildatatask($id)
    {
        $data = Task::find($id);
        return view('Tasks.tampildatatask', compact('data'));
    }

    public function updatedatatask(Request $request, $id)
    {
        $data = Task::find($id);
        $data->update($request->all());
        return redirect()->route('task')->with('success', 'task update successfully .');
    }

    public function deletedatatask($id)
    {
        $data = Task::find($id);
        $data->delete();
        return redirect()->route('task')->with('success', 'task deleted successfully .');
    }
}
