<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.user.create', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:8|max:255',
            'password' => 'required'
        ]);
        User::create($validatedData);
        return redirect('/dashboard/user')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:8|max:255',
        ]);
        if ($request->filled('password')) {
            if (!Hash::check($request->password, $user->password)) {
                $validatedData['password'] = bcrypt($request->password);
            } else {
                return redirect()->back()->withInput()->withErrors(['password' => 'Password baru tidak boleh sama dengan password saat ini.']);
            }
        }
        $user->update($validatedData);
        return redirect('/dashboard/user')->with('success', 'User berhasil diperbaharui!');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'User berhasil dihapus!');
    }
}
