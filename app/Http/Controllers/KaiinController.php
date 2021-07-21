<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kaiin;
use Illuminate\Support\Facades\Auth;

class KaiinController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user()->name;
    
        $items = Kaiin::all();
        $banknames = ['', '横浜銀行','ゆうちょ銀行'];
        $bankabbrev = ['', '横浜','郵貯'];
        $notices = ['', 'Web','Web★', '','電話'];
        $dones = ['未', '済'];
        $header = "会員名簿";
        return view('kaiin.index', 
            ['items' => $items, 
            'banks'=>$bankabbrev, 
            'notices'=>$notices, 
            'dones'=>$dones,
            'user'=>$user,
            'header'=>$header,
            ]);
        }

}
