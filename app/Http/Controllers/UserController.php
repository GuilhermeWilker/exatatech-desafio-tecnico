<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return Inertia::render('CreateUser', [
            'user' => $user,
            ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'position' => 'required',
        'state' => 'required',
        'cellphone' => 'required',
        'selectedGender' => 'required',
    ]);

        $code = $data['selectedGender']['code'];
        unset($data['selectedGender']);

        $data['password'] = bcrypt(Str::random(16));
        User::create($data + ['gender' => $code]);

        return redirect()->route('dashboard');
    }

    public function showTable()
    {
        $users = User::all();
        $user = auth()->user();

        return Inertia::render('TabelaUsers', [
            'users' => $users,
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return Inertia::render('EditUsers', [
            'user' => $user,
            ]);
    }

    public function update(Request $request, User $user)
    {
        $dadosValidados = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
            'position' => 'required',
            'state' => 'required',
            'cellphone' => 'required',
            ]);

        $user->update($dadosValidados);

        return redirect()->route('users.table');
    }

    public function destroy(Request $request, $id)
    {
        $user = $request->user();
        $user = User::find($id);

        if (!$user) {
            return redirect();
        }

        $user->delete();
    }

    public function fallback(User $user)
    {
        return Inertia::render('Error', [
            'user' => $user,
            'status' => 404,
        ]);
    }
}
