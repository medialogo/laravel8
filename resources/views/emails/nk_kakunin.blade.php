@component('mail::message')

{{$kumi}}組 {{$setai_name}}様

この度は令和3年度町内会費のお振込をいただき誠にありがとうございました。
入金を確認いたしましたのでご連絡いたします。

振込先銀行：{{$bank_to}} 
入金日：{{$furikomi_date->format('Y年m月d日')}}
入金額：{{number_format($kingaku)}}円

なお、領収証は8月定例会にて配布いたします。
いましばらくお待ちください。

今後ともよろしくお願い申し上げます。

踊場町内会
会計　池見　隆
@endcomponent