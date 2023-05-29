<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $user = auth()->user();
        $name = $user->name;
        $email = $user->email;
        $id = $user->id;

        $tasks = User::find($id)->tasks();

        $done_tasks = User::find($id)->tasks()->where('flag', 'is_done')->get();


        return view('home', ['name' => $name, 'email' => $email, 'id' => $id, 'tasks' => $tasks, 'done_tasks' => $done_tasks]);
    }
}
