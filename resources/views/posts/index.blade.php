@extends('layouts.app')

@section('content')
<h1>Перегляд списку дописів</h1>
     <a href="{{URL::route('posts.create')}}">Додати заптс</a>
     <hr>
@foreach ($posts as $post)
<div>
     <h2>{{$post->title}}</h2>
     <p>
          {{ $post->content }}
     </p>
     <p>
          {{ $post->description }}
     </p>
     <a href="{{URL::route('posts.show',['post'=>$category])}}">Читати далі</a>
</div>
@endforeach

@endsection