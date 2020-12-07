@extends('layouts.helloapp')
@section('content')
  <form action="/find" method="post">
  @csrf
  <input type="text" name="recipe_name">
  <input type="submit" value="Find">
  </form>

  <form action="/search"  method="post">
  @csrf 
  @if(isset($item))
  <table>
  <tr><th>Recipe</th></tr>
  <tr>
    <td>{{$item->recipe_name}}</td>
  </tr>
  </table>
  @endif
  </form>
@endsection