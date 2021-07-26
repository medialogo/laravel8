@extends('layouts.app2')

@section('title', 'Renraku.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')

<table class="table-fixed">
  <thead>
  <th class="px-4 py-2">id</th>
  <th class="px-4 py-2">組</th>
  <th class="px-4 py-2">世帯主名</th>
  <th class="px-4 py-2">email</th>
  <th class="px-4 py-2">電話番号</th>
  <th class="px-4 py-2">振込先</th>
  <th class="px-4 py-2">振込日</th>
  <th class="px-4 py-2">金額</th>
  <th class="px-4 py-2">依頼人名</th>
  <th class="w-1/4 px-4 py-2">備考</th>
  <th class="px-4 py-2">振込方法</th>
  <th class="px-4 py-2">振込元</th>
</thead>
</tr>
<tbody>
  @foreach ($items as $item) 
    <tr>
      <td class="border px-4 py-2">{{$item->id}}</td>
      <td class="border px-4 py-2">{{$item->kumi}}</td>
      <td class="border px-4 py-2">{{$item->setai_name}}</td>
      @if ($item->email)
      <td class="border px-4 py-2">あり</td>
      @else
      <td class="border px-4 py-2"></td>
      @endif
      <td class="border px-4 py-2">{{$item->telephone }}</td>
      <td class="border px-4 py-2">{{ $bankto[$item->bank_to] }}</td>
      <td class="border px-4 py-2">{{$item->furikomi_date->format('m/d')}}</td>
      <td class="border px-4 py-2">{{ number_format($item->kingaku)}}</td>
      <td class="border px-4 py-2">{{ $item->furikomi_name }}</td>
      <td class="border px-4 py-2">{{$item->memo}}</td>
      <td class="border px-4 py-2">{{ $methods[$item->furikomi_method] }}</td>
      <td class="border px-4 py-2">{{ $bankfrom[$item->bank_from] }}</td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection

@section('footer')
copyright 2021 mediaLogo
@endsection