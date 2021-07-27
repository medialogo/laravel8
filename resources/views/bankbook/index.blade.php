@extends('layouts.app2')

@section('title', 'Bankbook.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
<table class="table-fixed">
  <th class="px-4 py-2">連番</th>
  <th class="px-4 py-2">入金日</th>
  <th class="px-4 py-2">取引区分</th>
  <th class="px-4 py-2">入金額</th>
  <th class="px-4 py-2">通帳残高</th>
  <th class="px-4 py-2">テキスト</th>
  <th class="px-4 py-2">名簿ID</th>
  <th class="px-4 py-2">組</th>
  <th class="px-4 py-2">依頼人</th>
  <th class="px-4 py-2">入金連絡</th>
  <th class="px-4 py-2">処理済</th>
</tr>
  @foreach ($items as $item) 
    <tr>
      <td  class="border px-4 py-2">{{$item->transact_id}}</td>
      @if ($item->trans_date)
        <td  class="border px-4 py-2">{{$item->trans_date->format('m月d日') }}</td>
      @else
        <td  class="border px-4 py-2"></td>
      @endif      
      <td  class="border px-4 py-2">{{$item->trans_type}}</td>
      <td  class="border px-4 py-2">{{ number_format($item->amount)}}</td>
      <td  class="border px-4 py-2">{{ number_format($item->balance) }}</td>
      <td  class="border px-4 py-2">{{$item->trans_text}}</td>
      <td  class="border px-4 py-2">{{$item->meibo_id}}</td>
        <td  class="border px-4 py-2">{{$item->kaiin->kumi}}</td>
        <td  class="border px-4 py-2">{{$item->kaiin->fullname}}</td>
      <!-- <td  class="border px-4 py-2"></td>
        <td  class="border px-4 py-2"></td> -->
      <td  class="border px-4 py-2">{{$notices[$item->notice]}}</td>
      <td  class="border px-4 py-2">{{$dones[$item->done]}}</td>
    </tr>
    @endforeach
</table>
@endsection


@section('footer')
copyright 2021 mediaLogo
@endsection