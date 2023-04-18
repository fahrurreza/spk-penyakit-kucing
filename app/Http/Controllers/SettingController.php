<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Rulebase, Penyakit, Gejala, Rule};
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $setting    = Rulebase::all();
        $rule       = Rule::all();
        $penyakit   = Penyakit::all();
        $gejala     = Gejala::all();
        
        return view('setting.index', compact('setting', 'rule', 'penyakit', 'gejala'));
    }

    public function create()
    {
        $rule       = Rule::all();
        $penyakit   = Penyakit::all();
        $gejala     = Gejala::all();
        return view('setting.create', compact('rule', 'penyakit', 'gejala'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rule_id' => ['required'],
            'penyakit_kode' => ['required'],
            'gejala_kode' => ['required']
        ]);

        $insert = DB::table('rule_base')->insert([
            'rule_id' => $request->rule_id,
            'penyakit_kode' => $request->penyakit_kode,
            'gejala_kode' => $request->gejala_kode
        ]);

        if(!$insert)
        {
            return redirect('setting')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('setting')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function edit($id)
    {
        $data = setting::where('id', $id)->first();
        return view('setting.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $update = setting::where('id', $id)
                    ->update([
                        'kode'      => $request->kode,
                        'setting'  => $request->setting
                    ]);
                
        if($update)
        {
            return redirect('/setting')->with('status', 'data telah diubah');
        }
        else
        {
            return redirect('/setting')->with('status_error', 'data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $delete = setting::destroy($id);
        
        if(!$delete)
        {
            return redirect('setting')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('setting')->with('status', 'Data telah di hapus!');
        }
    }
}
