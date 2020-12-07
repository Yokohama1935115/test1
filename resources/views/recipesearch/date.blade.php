@extends('layouts.helloapp')

@section('content')
   <form action="/search" method="post">
    @csrf
    <table>
      @csrf
      <tr><th>Count: </th><td><input type="number" name="count"></td></tr>
      <tr><th>日付: </th><td><input type="date" name="theDate" ></td></tr>
      <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </form>
@endsection