<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bankbook;

class BankbookController extends Controller
{
    public function index(Request $request)
    {
        $items = Bankbook::all();
        $banknames = ['', '横浜銀行','ゆうちょ'];
        return view('bankbook.index', ['items' => $items, 'banks'=>$banknames]);
    }
}
