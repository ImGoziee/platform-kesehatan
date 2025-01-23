<?php

namespace App\Http\Controllers\Masters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Obat;

class Obat extends Controller
{
    public function index()
    {
        // $users = Obat::all();
        return view('admin.obat.obat');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8',
    //     ]);

    //     User::create([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //     ]);

    //     return redirect()->route('admin.users.index')->with('success', 'User added successfully.');
    // }

    // public function update(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => "required|email|unique:users,email,$id,id_user",
    //         'password' => 'nullable|min:8',
    //     ]);

    //     $user->update([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => $request->password ? bcrypt($request->password) : $user->password,
    //     ]);

    //     return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    // }

    // public function destroy(Request $req, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    // }

}
