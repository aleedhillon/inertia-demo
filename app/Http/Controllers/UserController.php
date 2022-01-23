<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
            ->latest()
            ->when($request->query('q'), function ($query, $q) {
                return $query->where('name', 'LIKE', "%{$q}%")
                    ->orWhere('email', 'LIKE', "%{$q}%");
            })->paginate(9, [
                'id',
                'name',
                'email',
                'created_at'
            ])->withQueryString();

        return Inertia::render('Users', [
            'users' => $users,
            'filters' => $request->only('q'),
            'can' => [
                'createUser' => Auth::user()->email == 'alee@gmail.com'
            ]
        ]);
    }

    public function create()
    {
        if(!Gate::allows('create-user')) {
            abort(403, 'You are not authorized to create users');
        }
        return Inertia::render('UsersCreate');
    }

    public function post(Request $request)
    {
        if(!Gate::allows('create-user')) {
            abort(403, 'You are not authorized to create users');
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|max:255'
        ]);

        User::create($validated);

        return redirect('/users');
    }
}
