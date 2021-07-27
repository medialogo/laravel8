@extends('layouts.app2')

@section('title', 'Kaiin.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')

<table class="table-fixed">
  <th class="px-4 py-2">id</th>
  <th class="px-4 py-2">組</th>
  <th class="px-4 py-2">連番</th>
  <th class="px-4 py-2">世帯主名</th>
  <th class="px-4 py-2">セタイヌシメイ</th>
  <th class="px-4 py-2">入金日</th>
  <th class="px-4 py-2">入金額</th>
  <th class="px-4 py-2">振込先</th>
  <th class="px-4 py-2">入金備考</th>
  <th class="px-4 py-2">会員備考</th>
  <th class="px-4 py-2">姓</th>
  <th class="px-4 py-2">名</th>
  <th class="px-4 py-2">セイ</th>
  <th class="px-4 py-2">メイ</th>
</tr>
  @foreach ($items as $item) 
    <tr>
      <td  class="border px-4 py-2">{{$item->id}}</td>
      <td  class="border px-4 py-2">{{$item->kumi}}</td>
      <td  class="border px-4 py-2">{{$item->kumi_no}}</td>
      <td  class="border px-4 py-2">{{$item->fullname}}</td>
      <td  class="border px-4 py-2">{{$item->fullname_kana}}</td>
      @if ($item->bankbook)
        <td  class="border px-4 py-2">{{$item->bankbook->trans_date->format('m月d日') }}</td>
        <td  class="border px-4 py-2">{{ number_format($item->bankbook->amount) }}</td>
        <td  class="border px-4 py-2">{{ $banks[$item->bankbook->bank_id] }}</td>
      @else
        <td  class="border px-4 py-2"></td>
        <td  class="border px-4 py-2"></td>
        <td  class="border px-4 py-2"></td>
      @endif
      <td  class="border px-4 py-2">{{$item->memo1}}</td>
      <td  class="border px-4 py-2">{{$item->memo2}}</td>
      <td  class="border px-4 py-2">{{$item->name_sei}}</td>
      <td  class="border px-4 py-2">{{$item->name_mei}}</td>
      <td  class="border px-4 py-2">{{$item->name_sei_kana}}</td>
      <td  class="border px-4 py-2">{{$item->name_mei_kana}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2021 mediaLogo
@endsection