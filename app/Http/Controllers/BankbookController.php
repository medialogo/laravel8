<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bankbook;

class BankbookController extends Controller
{
    public function index(Request $request)
    {
        $bank_id = $request['bank_id'];
        $items = Bankbook::where('bank_id', $bank_id)->get();
        $banknames = ['', '横浜','郵貯'];
        $notices = ['', 'Web','Web★', '','電話'];
        $dones = ['未', '済'];
        return view('bankbook.index', 
            ['items' => $items, 'banks'=>$banknames, 'notices'=>$notices, 'dones'=>$dones]);
    }
}
