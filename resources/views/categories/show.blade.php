@extends('layouts.app')

@section('content')

<h1>Перегляд категорії {{$category->title}}</h1>
<p>
     {{ $category->description }}
</p>
<h2>Записи категорії</h2>
@foreach($category->posts as $post)
<div>
<h3>{{$post->title}}</h3>
<a> href="{{URL::route('categories.show',['category'=>$category])}}">Читати повністю</a>
</div>
@endforeach
@endsection