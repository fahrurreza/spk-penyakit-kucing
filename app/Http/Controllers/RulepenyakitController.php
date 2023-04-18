<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Rulepenyakit, Penyakit, Gejala, Rule};
use Illuminate\Support\Facades\DB;

class RulepenyakitController extends Controller
{
    public function index()
    {
        $rulepenyakit    = Rulepenyakit::all();
        $rule       = Rule::all();
        $penyakit   = Penyakit::all();
        $gejala     = Gejala::all();
        
        return view('rulepenyakit.index', compact('rulepenyakit', 'rule', 'penyakit', 'gejala'));
    }

    public function create()
    {
        $rule = Rule::all();
        return view('rule.create', compact('rule'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'rule_id' => ['required'],
            'penyakit_id' => ['required']
        ]);

        $insert = DB::table('rule_penyakit')->insert([
            'rule_id' => $request->rule_id,
            'penyakit_id' => $request->penyakit_id
        ]);

        if(!$insert)
        {
            return redirect('rule_penyakit')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('rule_penyakit')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function destroy($id)
    {
        $delete = Rulepenyakit::destroy($id);
        
        if(!$delete)
        {
            return redirect('rule_penyakit')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('rule_penyakit')->with('status', 'Data telah di hapus!');
        }
    }
}
