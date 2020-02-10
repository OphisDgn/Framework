<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Skill;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $ski = $user->skills;
        return view('user', compact('user', 'ski'));
    }
    
    public function add(Request $request)
    {
        $user = Auth::user();
        $ski = $user->skills;
        $skis = Skill::all();
        DB::table('skill_user')->insert(['skill_id'=>$request->input('skill'), 'niveau'=>$request->input('niveau'), 'user_id'=>$user->id ]);
        return redirect()->route('users');
    
    }
    
}
