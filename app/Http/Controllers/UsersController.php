<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    /**
     * Show the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show');
    }

    public function edit(User $user)
    {
        return view('users.edit');
    }

}
