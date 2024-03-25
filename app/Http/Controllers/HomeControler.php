<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('index', [
            'skills' => Skill::all(),
        ]);
    }
}
