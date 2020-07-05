@php

$routes=[['text'=>'brands','name'=>'brands_management','params'=>['wcrud'=>1]]];

@endphp

@foreach($routes as $route)

<li><a href="{{route($route['name'])}}">{{$route['text']}}</a></li>

@endforeach
