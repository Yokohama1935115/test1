@extends('layouts.helloapp')

@section('content')
<table>
<tr><td></td><th>ラーメン</th><th>御飯</th><th>その他</th></tr>
  @for ($i=0;$i<($count);$i++)
    <tr>
      <th>{{$date ++}}</th>
      @foreach ($items as $item)
        <td>{{$item->recipe_name}}</td>
      @endforeach

    </tr>
  @endfor
</table>
<a href="/find">追加</a>
@endsection