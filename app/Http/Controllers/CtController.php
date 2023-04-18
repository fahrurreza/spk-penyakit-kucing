<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ct;
use Illuminate\Support\Facades\DB;

class CtController extends Controller
{
    public function index()
    {
        $ct = Ct::all();
        $halaman = 'Certainty Term';
        return view('ct.index', compact('ct', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Certainty Term';
        return view('ct.create', compact('halaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jawaban' => ['required'],
            'nilai'     => ['required']
        ]);

        $insert = DB::table('jawaban')->insert([
            'jawaban' => $request->jawaban,
            'nilai' => $request->nilai
        ]);

        if(!$insert)
        {
            return redirect('/ct')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('/ct')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function edit($id)
    {
        $data = Ct::where('id', $id)->first();
        $halaman = 'Certainty Term';
        return view('ct.edit', compact('data', 'halaman'));
    }

    public function update(Request $request, $id)
    {
        $update = Ct::where('id', $id)
                    ->update([
                        'jawaban'      => $request->jawaban,
                        'nilai'  => $request->nilai
                    ]);
                
        if($update)
        {
            return redirect('/ct')->with('status', 'data telah diubah');
        }
        else
        {
            return redirect('/ct')->with('status_error', 'data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $delete = Ct::destroy($id);
        
        if(!$delete)
        {
            return redirect('/ct')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('/ct')->with('status', 'Data telah di hapus!');
        }
    }
}
