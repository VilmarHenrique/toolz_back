<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {   
      
        $user = User::find(Auth::user()->id);
        return response()->json($user, 200);
    }
}
