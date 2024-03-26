<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index()
    {
        return view('index', [
            'skills' => Skill::all(),
            'educations' => Education::all(),
        ]);
    }
}
