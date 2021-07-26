<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NkRenraku;
use Illuminate\Support\Facades\Auth;

class NkRenrakuController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->name;
    
        $items = NkRenraku::orderBy('id', 'DESC')->get();
        $bankabbrev = ['', '横浜','郵貯'];
        $bankfrom = ['', '浜銀(戸塚)','浜銀(その他)','ゆうちょ','その他','コンビニ'];
        $methods = ['', 'ATM','窓口','ネット'];
        $notices = ['', 'Web','Web★', '','電話'];
        $dones = ['未', '済'];
        $header = "入金連絡";
        return view('renraku.index', 
            ['items' => $items, 
            'bankto'=>$bankabbrev, 
            'bankfrom'=>$bankfrom, 
            'methods'=>$methods, 
            'notices'=>$notices, 
            'dones'=>$dones,
            'user'=>$user,
            'header'=>$header,
            ]);
    }
    
    public function getNew()
    {
        $user = Auth::user()->name;
        $id = NkRenraku::pluck('id')->last();
        $id--;
        $items = redirect()->route('getNewRenraku',['id' => $id]);
        return $items;

    }    

}
