<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $users = User::all();

        $userCount = User::count();

        return Inertia::render('Dashboard', [
            'user' => $user,
            'users' => $users->toArray(),
            'userCount' => $userCount,
            'maleUsers' => $this->maleUsersCount(),
            'femaleUsers' => $this->femaleUsersCount(),
            ]);
    }

    private function maleUsersCount()
    {
        $maleUsers = User::where('gender', 'M')->count();

        if ($maleUsers == 0) {
            $maleUsers = 0;
        }

        return $maleUsers;
    }

    private function femaleUsersCount()
    {
        $femaleUsers = User::where('gender', 'F')->count();

        if ($femaleUsers == 0) {
            $femaleUsers = 0;
        }

        return $femaleUsers;
    }
}
