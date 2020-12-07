@extends('layouts.jissyu')

@section('title', '新規登録')

@section('menu_title')
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/post/create" method="post">
   <table>
      @csrf
    <tr><th>メールアドレス: </th><td><input type="text" name="mail" ></td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password" ></td></tr>
    <tr><th>性別</th><td>
      <input type="radio" value="man" name="gender" id="man">男性
      <input type="radio"  value="woman" name="gender" id="woman">女性
      <input type="radio" value="num" name="gender" id="num">選択しない 
    </td></tr>
    <tr><th>生年月日: </th><td><input type="date" 　name="date" ></td></tr>
    <tr><th>地域: </th><td><input type="text" name="area_id" ></td></tr>
    <tr><th>最寄り駅: </th><td><input type="text" name="station_id" ></td></tr>
    <tr><th>同居人数: </th><td><input type="text" name="people_ind" >人</td></tr>
    <tr><th>ニックネーム: </th><td><input type="text" name="nickname"></td></tr>
    

    <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </form>
@endsection

