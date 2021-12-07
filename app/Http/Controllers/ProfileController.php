<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::find($request->id);
        
        if (empty($profile)) {
            abort(404);
        }

        return view('profile.index', ['profile' => $profile]);
    }
}
