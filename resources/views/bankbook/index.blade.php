@extends('layouts.app2')

@section('title', 'Bankbook.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
<table class="bankbook table-auto">
  <th class="w-1/24">連番</th>
  <th class="w-1/12">入金日</th>
  <th class="w-1/24">取引区分</th>
  <th class="w-1/12">入金額</th>
  <th class="w-1/12">通帳残高</th>
  <th class="w-1/24">テキスト</th>
  <th class="w-1/12">名簿ID</th>
  <th class="w-1/24">組</th>
  <th class="w-1/12">依頼人(姓)</th>
  <th class="w-1/12">依頼人(名)</th>
  <th class="w-1/24">入金連絡</th>
  <th class="w-1/24">処理済</th>
</tr>
  @foreach ($items as $item) 
    <tr>
      <td>{{$item->transact_id}}</td>
      @if ($item->trans_date)
        <td>{{$item->trans_date->format('m月d日') }}</td>
      @else
        <td></td>
      @endif      
      <td>{{$item->trans_type}}</td>
      <td>{{ number_format($item->amount)}}</td>
      <td>{{ number_format($item->balance) }}</td>
      <td>{{$item->trans_text}}</td>
      <td>{{$item->meibo_id}}</td>
        <td>{{$item->kaiin->kumi}}</td>
        <td>{{$item->kaiin->fullname}}</td>
      <!-- <td></td>
        <td></td> -->
      <td>{{$notices[$item->notice]}}</td>
      <td>{{$dones[$item->done]}}</td>
    </tr>
    @endforeach
</table>
@endsection


@section('footer')
copyright 2021 mediaLogo
@endsection