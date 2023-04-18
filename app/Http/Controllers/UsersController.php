<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::get();
        return view('user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $insert = DB::table('users')->insert([
            'name'      => $request->nama,
            'username'  => $request->username,
            'position'  => 'User',
            'email'     => $request->email,
            'password' => Hash::make('12345678')
        ]);

        if(!$insert)
        {
            return redirect('user')->with('status_error', 'User baru gagal ditambahkan!');
        }
        else
        {
            return redirect('user')->with('status', 'User baru telah ditambahkan!');
        }
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        return view('user.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $cek = User::where('id', $id)->first();

        if (password_verify($request->oldpassword, $cek->password))
        {
            if($request->newpassword != $request->confirm)
            {
                return redirect('/')->with('status_error', 'Password tidak sama, coba lagi!');
            }
            else
            {
                $update = User::where('id', $id)
                    ->update([
                        'password'      => password_hash($request->newpassword, PASSWORD_DEFAULT)
                    ]);
                
                if($update)
                {
                    return redirect('/')->with('status', 'Password telah diubah');
                }
                else
                {
                    return redirect('/')->with('status_error', 'Password gagal diubah');
                }
            }
        }
        else
        {
            return redirect('/')->with('status_error', 'Password lama salah');
        }
    }

    public function destroy($id)
    {
        $delete = User::destroy($id);

        if($delete)
        {
            return redirect('/user')->with('status', 'Berhasil dihapus');
        }
        else
        {
            return redirect('/user')->with('error', 'Gagal dihapus');
        }
    }
}
