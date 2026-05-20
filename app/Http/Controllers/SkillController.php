<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

public function index()
{
$skills = Skill::all();

return view('skills.index', compact('skills'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'percentage' => 'required|integer|min:0|max:100'
    ]);

    Skill::create($validated);

    return back();
}

}