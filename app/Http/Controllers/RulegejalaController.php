<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Rulegejala, Penyakit, Gejala, Rule};
use Illuminate\Support\Facades\DB;

class RulegejalaController extends Controller
{
    public function index()
    {
        $setting    = Rulegejala::all();
        $rule       = Rule::all();
        $penyakit   = Penyakit::all();
        $gejala     = Gejala::all();
        
        return view('rulegejala.index', compact('setting', 'rule', 'penyakit', 'gejala'));
    }

    public function create()
    {
        $rule = Rule::all();
        return view('rule.create', compact('rule'));
    }

    public function store(Request $request)
    {
        $rule = Rule::all();

        $isi = 'Rule'.count($rule)+1;

        $request->validate([
            'rule_id' => ['required'],
            'gejala_kode' => ['required']
        ]);

        $insert = DB::table('rule_gejala')->insert([
            'rule_id' => $request->rule_id,
            'gejala_kode' => $request->gejala_kode
        ]);

        if(!$insert)
        {
            return redirect('rule_gejala')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('rule_gejala')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function destroy($id)
    {
        $delete = Rulegejala::destroy($id);
        
        if(!$delete)
        {
            return redirect('rule_gejala')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('rule_gejala')->with('status', 'Data telah di hapus!');
        }
    }
}
