<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    protected $user;

    /**
     * Create a new controller instance.
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile', [
            'user' => Auth::user(),
        ]);
    }

}
