<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    public function index()
    {
        $halaman = 'Gejala';
        $gejala = Gejala::all();
        return view('gejala.index', compact('gejala', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Tambah Geja;a';
        return view('gejala.create', 'halaman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => ['required'],
            'gejala' => ['required']
        ]);

        $insert = DB::table('gejala')->insert([
            'kode' => $request->kode,
            'gejala' => $request->gejala
        ]);

        if(!$insert)
        {
            return redirect('gejala')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('gejala')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function edit($id)
    {
        $halaman = 'Edit Gejala';
        $data = Gejala::where('id', $id)->first();
        return view('gejala.edit', compact('data', 'halaman'));
    }

    public function update(Request $request, $id)
    {
        $update = Gejala::where('id', $id)
                    ->update([
                        'kode'      => $request->kode,
                        'gejala'  => $request->gejala
                    ]);
                
        if($update)
        {
            return redirect('/gejala')->with('status', 'data telah diubah');
        }
        else
        {
            return redirect('/gejala')->with('status_error', 'data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $delete = Gejala::destroy($id);
        
        if(!$delete)
        {
            return redirect('gejala')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('gejala')->with('status', 'Data telah di hapus!');
        }
    }
}
