<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $halaman = 'Dashboard';
        return view('dashboard.index', compact('halaman'));
    }
}
