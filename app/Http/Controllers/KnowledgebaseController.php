<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KnowledgebaseController extends Controller
{
    public function knowledgebase()
    {

        $data = User::all();
        return view('Knowledgebases.knowledgebase', compact('data'));

    }
}
