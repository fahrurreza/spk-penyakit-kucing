<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use Illuminate\Support\Facades\DB;

class RuleController extends Controller
{
    public function index()
    {
        $rule = Rule::all();
        return view('rule.index', compact('rule'));
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
            'nilai' => ['required']
        ]);

        $insert = DB::table('rule')->insert([
            'rule' => $isi,
            'nilai' => $request->nilai
        ]);

        if(!$insert)
        {
            return redirect('rule')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('rule')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function destroy($id)
    {
        $delete = Rule::destroy($id);
        
        if(!$delete)
        {
            return redirect('rule')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('rule')->with('status', 'Data telah di hapus!');
        }
    }
}
