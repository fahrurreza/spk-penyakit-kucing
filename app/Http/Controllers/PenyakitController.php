<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::all();
        $halaman = 'Penyakit';
        return view('penyakit.index', compact('penyakit', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Penyakit';
        return view('penyakit.create', compact('halaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => ['required'],
            'penyakit' => ['required']
        ]);

        $insert = DB::table('penyakit')->insert([
            'kode' => $request->kode,
            'penyakit' => $request->penyakit
        ]);

        if(!$insert)
        {
            return redirect('penyakit')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('penyakit')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function edit($id)
    {
        $halaman = 'Edit Penyakit';
        $data = Penyakit::where('id', $id)->first();
        return view('penyakit.edit', compact('data', 'halaman'));
    }

    public function update(Request $request, $id)
    {
        $update = Penyakit::where('id', $id)
                    ->update([
                        'kode'      => $request->kode,
                        'penyakit'  => $request->penyakit
                    ]);
                
        if($update)
        {
            return redirect('/penyakit')->with('status', 'data telah diubah');
        }
        else
        {
            return redirect('/penyakit')->with('status_error', 'data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $delete = Penyakit::destroy($id);
        
        if(!$delete)
        {
            return redirect('penyakit')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('penyakit')->with('status', 'Data telah di hapus!');
        }
    }
}
