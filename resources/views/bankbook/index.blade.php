@extends('layouts.app2')

@section('title', 'Bankbook.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
<table class="mx-auto table-fixed">
  <th class="px-2 py-1">連番</th>
  <th class="px-2 py-1">入金日</th>
  <th class="px-2 py-1">取引区分</th>
  <th class="px-2 py-1">入金額</th>
  <th class="px-2 py-1">通帳残高</th>
  <th class="px-2 py-1">テキスト</th>
  <th class="px-2 py-1">名簿ID</th>
  <th class="px-2 py-1">組</th>
  <th class="px-2 py-1">依頼人</th>
  <th class="px-2 py-1">入金連絡</th>
  <th class="px-2 py-1">処理済</th>
</tr>
  @foreach ($items as $item) 
    <tr>
      <td  class="border text-center px-2 py-1">{{$item->transact_id}}</td>
      @if ($item->trans_date)
        <td  class="border px-2 py-1">{{$item->trans_date->format('m/d') }}</td>
      @else
        <td  class="border px-2 py-1"></td>
      @endif      
      <td  class="border px-2 py-1">{{$item->trans_type}}</td>
      <td  class="border px-2 py-1">{{ number_format($item->amount)}}</td>
      <td  class="border text-right px-2 py-1">{{ number_format($item->balance) }}</td>
      <td  class="border px-2 py-1">{{$item->trans_text}}</td>
      <td  class="border text-right px-2 py-1">{{$item->meibo_id}}</td>
        <td  class="border text-center px-2 py-1">{{$item->kaiin->kumi}}</td>
        <td  class="border px-2 py-1">{{$item->kaiin->fullname}}</td>
      <!-- <td  class="border px-2 py-1"></td>
        <td  class="border px-2 py-1"></td> -->
      <td  class="border px-2 py-1">{{$notices[$item->notice]}}</td>
      <td  class="border text-center px-2 py-1">{{$dones[$item->done]}}</td>
    </tr>
    @endforeach
</table>
@endsection


@section('footer')
copyright 2021 mediaLogo
@endsection