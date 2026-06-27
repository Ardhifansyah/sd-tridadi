<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Galeri;
class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $admin = Admin::where(
            'email',
            $request->email
        )->first();

        if (
            $admin &&
            Hash::check(
                $request->password,
                $admin->password
            )
        ) {

            Session::put(
                'admin_id',
                $admin->id
            );

            Session::put(
                'admin_name',
                $admin->username
            );

            return redirect(
                '/admin/dashboard'
            );
        }

        return back()->with(
            'error',
            'Email atau Password Salah'
        );
    }
public function dashboard()
{
    $totalGuru = Guru::count();
    $totalBerita = Berita::count();
    $totalGaleri = Galeri::count();

    return view('admin.dashboard', compact(
        'totalGuru',
        'totalBerita',
        'totalGaleri'
    ));
}

    public function logout()
    {
        Session::flush();

        return redirect('/admin/login');
    }
}