<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $users = User::paginate(18, [
            'id',
            'name',
            'email',
            'created_at'
        ]);

        return Inertia::render('Users', [
            'users' => $users
        ]);
    }
}
