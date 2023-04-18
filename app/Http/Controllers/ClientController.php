<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Ct, Gejala, Rule};
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $soalan = Gejala::all();
        $jawaban = Ct::all();
        $halaman = 'Diagnosa';

        return view('client.diagnosa', compact('soalan', 'jawaban', 'halaman'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Rule::all();
        $halaman = 'Hasil';

        //Rule 1
        if ($request->G01 AND $request->G02 AND $request->G03 AND $request->G04)
        {
            $min = min($request->G01, $request->G02, $request->G03, $request->G04);
            $cf = 1;
            $hipotesis1 = $min * $cf;
            $p[] = 'P01';
        }

        //Rule 2
        if ($request->G01 AND $request->G02 AND $request->G03)
        {
            $min = min($request->G01, $request->G02, $request->G03);
            $cf = 0.75;
            $hipotesis2 = $min * $cf;
            $p[] = 'P01';
        }

        //Rule 3
        if ($request->G01 AND $request->G02)
        {
            $min = min($request->G01, $request->G02);
            $cf = 0.5;
            $hipotesis3 = $min * $cf;
            $p[] = 'P01';
        }
        //Rule 4
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13 AND $request->G14 AND $request->G15 AND $request->G16 AND $request->G17 AND $request->G18 AND $request->G19)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13, $request->G14, $request->G15, $request->G16, $request->G17, $request->G18, $request->G19);
            $cf = 1;
            $hipotesis4 = $min * $cf;
            $p[] = 'P02';
        }
        //Rule 5
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13 AND $request->G14 AND $request->G15 AND $request->G16 AND $request->G17 AND $request->G18)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13, $request->G14, $request->G15, $request->G16, $request->G17, $request->G18);
            $cf = 0.95;
            $hipotesis5 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 6
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13 AND $request->G14 AND $request->G15 AND $request->G16 AND $request->G17)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13, $request->G14, $request->G15, $request->G16, $request->G17);
            $cf = 0.90;
            $hipotesis6 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 7
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13 AND $request->G14 AND $request->G15 AND $request->G16)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13, $request->G14, $request->G15, $request->G16);
            $cf = 0.85;
            $hipotesis7 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 8
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13 AND $request->G14 AND $request->G15)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13, $request->G14, $request->G15);
            $cf = 0.8;
            $hipotesis8 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 9
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13 AND $request->G14)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13, $request->G14);
            $cf = 0.75;
            $hipotesis9 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 10
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10 AND $request->G13)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10, $request->G13);
            $cf = 0.7;
            $hipotesis10 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 11
        if ($request->G04 AND $request->G07 AND $request->G08 AND $request->G10)
        {
            $min = min($request->G04, $request->G07, $request->G08, $request->G10);
            $cf = 0.65;
            $hipotesis11 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 12
        if ($request->G04 AND $request->G07 AND $request->G08)
        {
            $min = min($request->G04, $request->G07, $request->G08);
            $cf = 0.6;
            $hipotesis12 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 13
        if ($request->G04 AND $request->G07)
        {
            $min = min($request->G04, $request->G07);
            $cf = 0.55;
            $hipotesis13 = $min * $cf;
            $p[] = 'P02';
        }

        //Rule 14
        if ($request->G07 AND $request->G15 AND $request->G30 AND $request->G31)
        {
            $min = min($request->G07, $request->G15, $request->G30, $request->G31);
            $cf = 1;
            $hipotesis14 = $min * $cf;
            $p[] = 'P03';
        }

        //Rule 15
        if ($request->G07 AND $request->G15 AND $request->G30)
        {
            $min = min($request->G07, $request->G15, $request->G30);
            $cf = 0.75;
            $hipotesis15 = $min * $cf;
            $p[] = 'P03';
        }

        //Rule 16
        if ($request->G07 AND $request->G15)
        {
            $min = min($request->G07, $request->G15);
            $cf = 0.5;
            $hipotesis16 = $min * $cf;
            $p[] = 'P03';
        }

        //Rule 17
        if ($request->G02 AND $request->G03 AND $request->G08 AND $request->G11 AND $request->G20 AND $request->G21 AND $request->G22 AND $request->G23)
        {
            $min = min($request->G02, $request->G03, $request->G08, $request->G11, $request->G20, $request->G21, $request->G22, $request->G23);
            $cf = 1;
            $hipotesis17 = $min * $cf;
            $p[] = 'P04';
        }

        //Rule 18
        if ($request->G02 AND $request->G03 AND $request->G08 AND $request->G11 AND $request->G20 AND $request->G21 AND $request->G22)
        {
            $min = min($request->G02, $request->G03, $request->G08, $request->G11, $request->G20, $request->G21, $request->G22);
            $cf = 0.9;
            $hipotesis18 = $min * $cf;
            $p[] = 'P04';
        }

        //Rule 19
        if ($request->G02 AND $request->G03 AND $request->G08 AND $request->G11 AND $request->G20 AND $request->G21)
        {
            $min = min($request->G02, $request->G03, $request->G08, $request->G11, $request->G20, $request->G21);
            $cf = 0.8;
            $hipotesis19 = $min * $cf;
            $p[] = 'P04';
        }

        //Rule 20
        if ($request->G02 AND $request->G03 AND $request->G08 AND $request->G11)
        {
            $min = min($request->G02, $request->G03, $request->G08, $request->G11);
            $cf = 0.7;
            $hipotesis20 = $min * $cf;
            $p[] = 'P04';
        }

        //Rule 21
        if ($request->G02 AND $request->G03 AND $request->G08)
        {
            $min = min($request->G02, $request->G03, $request->G08);
            $cf = 0.6;
            $hipotesis21 = $min * $cf;
            $p[] = 'P04';
        }

        //Rule 22
        if ($request->G02 AND $request->G03)
        {
            $min = min($request->G02, $request->G03);
            $cf = 0.5;
            $hipotesis22 = $min * $cf;
            $p[] = 'P04';
        }

        //Rule 23
        if ($request->G03 AND $request->G08 AND $request->G11 AND $request->G24)  
        {
            $min = min($request->G03, $request->G08, $request->G11, $request->G24);
            $cf = 1;
            $hipotesis23 = $min * $cf;
            $p[] = 'P05';
        }

        //Rule 24
        if ($request->G03 AND $request->G08 AND $request->G11)  
        {
            $min = min($request->G03, $request->G08, $request->G11);
            $cf = 0.75;
            $hipotesis24 = $min * $cf;
            $p[] = 'P05';
        }

        //Rule 25
        if ($request->G03 AND $request->G08)
        {
            $min = min($request->G03, $request->G08);
            $cf = 0.5;
            $hipotesis25 = $min * $cf;
            $p[] = 'P05';
        }

        //Rule 26
        if ($request->G07 AND $request->G08 AND $request->G14 AND $request->G23 AND $request->G25 AND $request->G26 AND $request->G27 AND $request->G28 AND $request->G29)
        {
            $min = min($request->G07, $request->G08, $request->G14, $request->G23, $request->G25, $request->G26, $request->G27, $request->G28, $request->G29);
            $cf = 1;
            $hipotesis26 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 27
        if ($request->G07 AND $request->G08 AND $request->G14 AND $request->G23 AND $request->G25 AND $request->G26 AND $request->G27 AND $request->G28)
        {
            $min = min($request->G07, $request->G08, $request->G14, $request->G23, $request->G25, $request->G26, $request->G27, $request->G28);
            $cf = 0.95;
            $hipotesis27 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 28
        if ($request->G07 AND $request->G08 AND $request->G14 AND $request->G23 AND $request->G25 AND $request->G26 AND $request->G27)
        {
            $min = min($request->G07, $request->G08, $request->G14, $request->G23, $request->G25, $request->G26, $request->G27);
            $cf = 0.9;
            $hipotesis28 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 29
        if ($request->G07 AND $request->G08 AND $request->G14 AND $request->G23 AND $request->G25 AND $request->G26)
        {
            $min = min($request->G07, $request->G08, $request->G14, $request->G23, $request->G25, $request->G26);
            $cf = 0.85;
            $hipotesis29 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 30
        if ($request->G07 AND $request->G08 AND $request->G14 AND $request->G23 AND $request->G25)
        {
            $min = min($request->G07, $request->G08, $request->G14, $request->G23, $request->G25);
            $cf = 0.80;
            $hipotesis30 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 31
        if ($request->G07 AND $request->G08 AND $request->G14 AND $request->G23)
        {
            $min = min($request->G07, $request->G08, $request->G14, $request->G23);
            $cf = 0.75;
            $hipotesis31 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 32
        if ($request->G07 AND $request->G08 AND $request->G14) 
        {
            $min = min($request->G07, $request->G08, $request->G14);
            $cf = 0.70;
            $hipotesis32 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 33
        if ($request->G07 AND $request->G08) 
        {
            $min = min($request->G07, $request->G08);
            $cf = 0.65;
            $hipotesis33 = $min * $cf;
            $p[] = 'P06';
        }

        //Rule 34
        if ($request->G30 AND $request->G31 AND $request->G32)
        {
            $min = min($request->G30, $request->G31, $request->G32);
            $cf = 1;
            $hipotesis34 = $min * $cf;
            $p[] = 'P07';
        }

        //Rule 35
        if ($request->G30 AND $request->G31)
        {
            $min = min($request->G30, $request->G31);
            $cf = 0.85;
            $hipotesis35 = $min * $cf;
            $p[] = 'P07';
        }

        //Rule 36
        if ($request->G04 AND $request->G05 AND $request->G06 AND $request->G08 AND $request->G09 AND $request->G12 AND $request->G19)
        {
            $min = min($request->G04, $request->G05, $request->G06, $request->G08, $request->G09, $request->G12, $request->G19);
            $cf = 1;
            $hipotesis36 = $min * $cf;
            $p[] = 'P08';
        }

        //Rule 37
        if ($request->G04 AND $request->G05 AND $request->G06 AND $request->G08 AND $request->G09 AND $request->G12)
        {
            $min = min($request->G04, $request->G05, $request->G06, $request->G08, $request->G09, $request->G12);
            $cf = 0.9;
            $hipotesis37 = $min * $cf;
            $p[] = 'P08';
        }

        //Rule 38
        if ($request->G04 AND $request->G05 AND $request->G06 AND $request->G08 AND $request->G09)
        {
            $min = min($request->G04, $request->G05, $request->G06, $request->G08, $request->G09);
            $cf = 0.8;
            $hipotesis38 = $min * $cf;
            $p[] = 'P08';
        }

        //Rule 39
        if ($request->G04 AND $request->G05 AND $request->G06 AND $request->G08)
        {
            $min = min($request->G04, $request->G05, $request->G06, $request->G08);
            $cf = 0.7;
            $hipotesis39 = $min * $cf;
            $p[] = 'P08';
        }

        //Rule 40
        if ($request->G04 AND $request->G05 AND $request->G06)
        {
            $min = min($request->G04, $request->G05, $request->G06);
            $cf = 0.6;
            $hipotesis40 = $min * $cf;
            $p[] = 'P08';
        }

        //Rule 41
        if ($request->G04 AND $request->G05)
        {
            $min = min($request->G04, $request->G05);
            $cf = 0.5;
            $hipotesis41 = $min * $cf;
            $p[] = 'P08';
        }

        //Rule 42
        if ($request->G08 AND $request->G15 AND $request->G17 AND $request->G30 AND $request->G31) 
        {
            $min = min($request->G08, $request->G15, $request->G17, $request->G30, $request->G31);
            $cf = 1;
            $hipotesis42 = $min * $cf;
            $p[] = 'P09';
        }

        //Rule 43
        if ($request->G08 AND $request->G15 AND $request->G17 AND $request->G30) 
        {
            $min = min($request->G08, $request->G15, $request->G17, $request->G30);
            $cf = 0.9;
            $hipotesis43 = $min * $cf;
            $p[] = 'P09';
        }

        //Rule 44
        if ($request->G08 AND $request->G15 AND $request->G17) 
        {
            $min = min($request->G08, $request->G15, $request->G17);
            $cf = 0.8;
            $hipotesis44 = $min * $cf;
            $p[] = 'P09';
        }

        //Rule 45
        if ($request->G08 AND $request->G15) 
        {
            $min = min($request->G08, $request->G15);
            $cf = 0.7;
            $hipotesis45 = $min * $cf;
            $p[] = 'P09';
        }

        //Rule 46
        if ($request->G08 AND $request->G09 AND $request->G30 AND $request->G33)
        {
            $min = min($request->G08, $request->G09, $request->G30, $request->G33);
            $cf = 1;
            $hipotesis46 = $min * $cf;
            $p[] = 'P10';
        }

        //Rule 47
        if ($request->G08 AND $request->G09 AND $request->G30)
        {
            $min = min($request->G08, $request->G09, $request->G30);
            $cf = 0.9;
            $hipotesis47 = $min * $cf;
            $p[] = 'P10';
        }

        //Rule 48
        if ($request->G08 AND $request->G09 AND $request->G24)
        {
            $min = min($request->G08, $request->G09, $request->G24);
            $cf = 0.8;
            $hipotesis48 = $min * $cf;
            $p[] = 'P10';
        }

        //Rule 49
        if ($request->G08 AND $request->G09)
        {
            $min = min($request->G08, $request->G09);
            $cf = 0.7;
            $hipotesis49 = $min * $cf;
            $p[] = 'P10';
        }

        //Rule 50
        if ($request->G04 AND $request->G08)
        {
            $min = min($request->G04, $request->G08);
            $cf = 0.6;
            $hipotesis50 = $min * $cf;
            $p[] = 'P10';
        }

        $fakta = json_encode($p);
        $p1 = substr_count($fakta, 'P01');
        $p2 = substr_count($fakta, 'P02');
        $p3 = substr_count($fakta, 'P03');
        $p4 = substr_count($fakta, 'P04');
        $p5 = substr_count($fakta, 'P05');
        $p6 = substr_count($fakta, 'P06');
        $p7 = substr_count($fakta, 'P07');
        $p8 = substr_count($fakta, 'P08');
        $p9 = substr_count($fakta, 'P09');
        $p10 = substr_count($fakta, 'P10');

        if($p1 == 3)
        {
            $hasil[] = [
            'cf' => $hipotesis1,
            'penyakit' => 'Diabetes'
            ];
        }
        if($p1 == 2)
        {
            $hasil[] = [
            'cf' => $hipotesis2,
            'penyakit' => 'Diabetes'
            ];
        }
        if($p1 == 1)
        {
            $hasil[] = [
            'cf' => $hipotesis3,
            'penyakit' => 'Diabetes'
            ];
        }
        if($p2 == 10)
        {
            $hasil[] = [
                'cf' => $hipotesis4,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 9)
        {
            $hasil[] = [
                'cf' => $hipotesis5,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 8)
        {
            $hasil[] = [
                'cf' => $hipotesis6,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 7)
        {
            $hasil[] = [
                'cf' => $hipotesis7,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 6)
        {
            $hasil[] = [
                'cf' => $hipotesis8,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 5)
        {
            $hasil[] = [
                'cf' => $hipotesis9,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 4)
        {
            $hasil[] = [
                'cf' => $hipotesis10,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis11,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis12,
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p2 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis13 * (1 - ($hipotesis13)),
                'penyakit' => 'Feline Leukimia Virus'
                ];
        }
        if($p3 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis14,
                'penyakit' => 'Infeksi Jamur'
                ];
        }
        if($p3 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis15,
                'penyakit' => 'Infeksi Jamur'
                ];
        }
        if($p3 == 1)
        {
            $hasil[] = [
                'cf' =>  $hipotesis16,
                'penyakit' => 'Infeksi Jamur'
                ];
        }
        if($p4 == 6)
        {
            $hasil[] = [
                'cf' => $hipotesis17,
                'penyakit' => 'Penyakit Saluran Kemih'
                ];
        }
        if($p4 == 5)
        {
            $hasil[] = [
                'cf' => $hipotesis18,
                'penyakit' => 'Penyakit Saluran Kemih'
                ];
        }
        if($p4 == 4)
        {
            $hasil[] = [
                'cf' => $hipotesis19,
                'penyakit' => 'Penyakit Saluran Kemih'
                ];
        }
        if($p4 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis20,
                'penyakit' => 'Penyakit Saluran Kemih'
                ];
        }
        if($p4 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis21,
                'penyakit' => 'Penyakit Saluran Kemih'
                ];
        }
        if($p4 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis22,
                'penyakit' => 'Penyakit Saluran Kemih'
                ];
        }
        if($p5 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis23,
                'penyakit' => 'Feline Panleukopenia'
                ];
        }
        if($p5 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis24,
                'penyakit' => 'Feline Panleukopenia'
                ];
        }
        if($p5 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis25,
                'penyakit' => 'Feline Panleukopenia'
                ];
        }
        if($p6 == 8)
        {
            $hasil[] = [
                'cf' => $hipotesis26,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 7)
        {
            $hasil[] = [
                'cf' => $hipotesis27,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 6)
        {
            $hasil[] = [
                'cf' => $hipotesis28,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 5)
        {
            $hasil[] = [
                'cf' => $hipotesis29,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 4)
        {
            $hasil[] = [
                'cf' => $hipotesis30,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis31,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis32,
                'penyakit' => 'Rabies'
                ];
        }
        if($p6 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis33,
                'penyakit' => 'Rabies'
                ];
        }
        if($p7 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis34,
                'penyakit' => 'Stud Tail'
                ];
        }
        if($p7 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis35,
                'penyakit' => 'Stud Tail'
                ];
        }
        if($p8 == 6)
        {
            $hasil[] = [
                'cf' => $hipotesis36,
                'penyakit' => 'Ispa atau Flu Kucing'
                ];
        }
        if($p8 == 5)
        {
            $hasil[] = [
                'cf' => $hipotesis37,
                'penyakit' => 'Ispa atau Flu Kucing'
                ];
        }
        if($p8 == 4)
        {
            $hasil[] = [
                'cf' => $hipotesis38,
                'penyakit' => 'Ispa atau Flu Kucing'
                ];
        }
        if($p8 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis39,
                'penyakit' => 'Ispa atau Flu Kucing'
                ];
        }
        if($p8 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis40,
                'penyakit' => 'Ispa atau Flu Kucing'
                ];
        }
        if($p8 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis41,
                'penyakit' => 'Ispa atau Flu Kucing'
                ];
        }
        if($p9 == 4)
        {
            $hasil[] = [
                'cf' => $hipotesis42,
                'penyakit' => 'Ring Worm'
                ];
        }
        if($p9 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis43,
                'penyakit' => 'Ring Worm'
                ];
        }
        if($p9 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis44,
                'penyakit' => 'Ring Worm'
                ];
        }
        if($p9 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis45,
                'penyakit' => 'Ring Worm'
                ];
        }
        if($p10 == 5)
        {
            $hasil[] = [
                'cf' => $hipotesis46,
                'penyakit' => 'Cacingan'
                ];
        }
        if($p10 == 4)
        {
            $hasil[] = [
                'cf' => $hipotesis37,
                'penyakit' => 'Cacingan'
                ];
        }
        if($p10 == 3)
        {
            $hasil[] = [
                'cf' => $hipotesis48,
                'penyakit' => 'Cacingan'
                ];
        }
        if($p10 == 2)
        {
            $hasil[] = [
                'cf' => $hipotesis49,
                'penyakit' => 'Cacingan'
                ];
        }
        if($p10 == 1)
        {
            $hasil[] = [
                'cf' => $hipotesis50,
                'penyakit' => 'Cacingan'
                ];
        }
        
        return view('client.hasil', compact('hasil', 'halaman'));
    }
}
