@extends('layouts.app')

@section('content')

<h1>Перегляд запису "{{$post->title}}"</h1>
<h2>Категорія запису: <a href="{{URL::route('categories.show',['category'=>$post->category])}}"{{$post->category->title}}"</a></h2>
<p>
     {{ $post->content }}
</p>
<p>
     {{ $post->description }}
</p>
@endsection