<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bankbook;
use Illuminate\Support\Facades\Auth;


class BankbookController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->name;
        if ($request['bank_id']) {
            $bank_id = $request['bank_id'];
        } else {
            $bank_id = 0;
        }
        
        $items = Bankbook::with('Kaiin')->where('bank_id', $bank_id)->get();
        $banknames = ['', '横浜銀行','ゆうちょ銀行'];
        $bankabbrev = ['', '横浜','郵貯'];
        $notices = ['', 'Web','Web★', '','電話'];
        $dones = ['未', '済'];
        $header = "入金処理（" . $banknames[$bank_id] . "）";
        return view('bankbook.index', 
            ['items' => $items, 
             'banks'=>$banknames, 
             'notices'=>$notices, 
             'dones'=>$dones,
             'user'=>$user,
             'header'=>$header,
             'slot'=>'（＾＾；'
            ]);
    }
}
