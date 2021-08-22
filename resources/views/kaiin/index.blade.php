@extends('layouts.app2')

@section('title', 'Kaiin.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')

<table class="mx-auto table-fixed">
  <th class="px-2 py-1">id</th>
  <th class="px-2 py-1">組</th>
  <th class="px-2 py-1">連番</th>
  <th class="px-2 py-1">世帯主名</th>
  <th class="px-2 py-1">セタイヌシメイ</th>
  <th class="px-2 py-1">入金日</th>
  <th class="px-2 py-1">入金額</th>
  <th class="px-2 py-1">振込先</th>
  <th class="px-2 py-1">入金備考</th>
  <th class="px-2 py-1">会員備考</th>
  <!-- <th class="px-2 py-1">姓</th>
  <th class="px-2 py-1">名</th>
  <th class="px-2 py-1">セイ</th>
  <th class="px-2 py-1">メイ</th> -->
</tr>
  @foreach ($items as $item) 
    <tr>
      <td  class="border text-center px-2 py-1">{{$item->id}}</td>
      <td  class="border text-center px-2 py-1">{{$item->kumi}}</td>
      <td  class="border text-center px-2 py-1">{{$item->kumi_no}}</td>
      <td  class="border px-2 py-1">{{$item->fullname}}</td>
      <td  class="border px-2 py-1">{{$item->fullname_kana}}</td>
      @if ($item->bankbook)
        <td  class="border px-2 py-1">{{$item->bankbook->trans_date->format('m/d') }}</td>
        <td  class="border px-2 py-1">{{ number_format($item->bankbook->amount) }}</td>
        <td  class="border px-2 py-1">{{ $banks[$item->bankbook->bank_id] }}</td>
      @else
        <td  class="border px-2 py-1"></td>
        <td  class="border px-2 py-1"></td>
        <td  class="border px-2 py-1"></td>
      @endif
      <td  class="border px-2 py-1">{{$item->memo1}}</td>
      <td  class="border px-2 py-1">{{$item->memo2}}</td>
      <!-- <td  class="border px-2 py-1">{{$item->name_sei}}</td>
      <td  class="border px-2 py-1">{{$item->name_mei}}</td>
      <td  class="border px-2 py-1">{{$item->name_sei_kana}}</td>
      <td  class="border px-2 py-1">{{$item->name_mei_kana}}</td> -->
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2021 mediaLogo
@endsection