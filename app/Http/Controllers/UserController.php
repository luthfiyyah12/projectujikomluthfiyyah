<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        // Mengambil semua data pengguna
        $users = User::all();


        // Mengambil semua pengguna dengan isAdmin = 1 (admin)
        $users = User::where('isAdmin', 1)->get();

        // Mengirim data ke view
        return view('admin.dashboard', compact('users'));
    }

    // Menampilkan form untuk menambah pengguna
    public function create()
    {
        return view('admin.user.create');
    }

    // Menyimpan data pengguna baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman pengguna setelah berhasil menambah pengguna
        return redirect()->route('user.index');
    }

    // Menampilkan form untuk mengedit pengguna
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    // Mengupdate data pengguna
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update data pengguna
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika password diisi, update password
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        // Redirect ke halaman pengguna setelah berhasil mengedit pengguna
        return redirect()->route('user.index');
    }

    // Menghapus pengguna
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect ke halaman pengguna setelah berhasil menghapus pengguna
        return redirect()->route('user.index');
    }
}

