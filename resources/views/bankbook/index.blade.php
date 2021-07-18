@extends('layouts.app2')

@section('title', 'Bankbook.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
<table style="border-width:1;collapse:collapse">
  <tr><th>id</th><th>銀行</th><th>連番</th><th>入金日</th>
  <th style="width:70px;text-align:center">入金額</th><th>取引区分</th>
  <th>組</th><th>依頼人(姓)</th><th>依頼人(名)</th><th>電話番号</th>
  <th>通帳残高</th><th>名簿ID</th><th>入金連絡</th><th>処理済</th>
</tr>
  @foreach ($items as $item) 
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$banks[$item->bank_id]}}</td>
      <td>{{$item->transact_id}}</td>
      <td>{{$item->trans_date->format('m月d日') }}</td>
      <td>{{ number_format($item->amount)}}</td>
      <td>{{$item->trans_type}}</td>
      <td>{{$item->kumi}}</td>
      <td>{{$item->name_sei}}</td>
      <td>{{$item->name_mei}}</td>
      <td>{{$item->phone}}</td>
      <td>{{ number_format($item->balance) }}</td>
      <td>{{$item->meibo_id}}</td>
      <td>{{$item->notice}}</td>
      <td>{{$item->done}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2021 mediaLogo
@endsection