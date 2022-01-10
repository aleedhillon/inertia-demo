<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
            ->when($request->query('q'), function ($query, $name) {
                return $query->where('name', 'LIKE', "%{$name}%");
            })->paginate(9, [
                'id',
                'name',
                'email',
                'created_at'
            ])->withQueryString();

        return Inertia::render('Users', [
            'users' => $users,
            'filters' => $request->only('q')
        ]);
    }

    public function create()
    {
        return Inertia::render('UsersCreate');
    }

    public function post(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|max:255'
        ]);

        User::create($validated);

        return redirect('/users');
    }
}
