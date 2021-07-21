@extends('layouts.app2')

@section('title', 'Kaiin.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')

<table class="bankbook table-auto">
  <th class="w-1/24">id</th>
  <th class="w-1/24">組</th>
  <th class="w-1/24">連番</th>
  <th class="w-1/8">世帯主名</th>
  <th class="w-1/8">セタイヌシメイ</th>
  <th class="w-1/12">入金日</th>
  <th class="w-1/12">入金額</th>
  <th class="w-1/12">振込先</th>
  <th class="w-1/8">姓</th>
  <th class="w-1/8">名</th>
  <th class="w-1/8">セイ</th>
  <th class="w-1/8">メイ</th>
  <th class="">入金備考</th>
  <th class="">会員備考</th>
</tr>
  @foreach ($items as $item) 
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->kumi}}</td>
      <td>{{$item->kumi_no}}</td>
      <td>{{$item->fullname}}</td>
      <td>{{$item->fullname_kana}}</td>
      @if ($item->bankbook)
        <td>{{$item->bankbook->trans_date->format('m月d日') }}</td>
        <td>{{ number_format($item->bankbook->amount) }}</td>
        <td>{{ $banks[$item->bankbook->bank_id] }}</td>
      @else
        <td></td>
        <td></td>
        <td></td>
      @endif
      <td>{{$item->memo1}}</td>
      <td>{{$item->memo2}}</td>
      <td>{{$item->name_sei}}</td>
      <td>{{$item->name_mei}}</td>
      <td>{{$item->name_sei_kana}}</td>
      <td>{{$item->name_mei_kana}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2021 mediaLogo
@endsection