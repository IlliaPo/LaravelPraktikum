@extends('layouts.app')

@section('content')
     <h1>Перегляд списку категорій</h1>
     <a> href="{{URL::route('categories.create')}}">Додати категорію</a>
     <hr>
@foreach ($categories as $category)
<div>
     <h2>{{$category->title}}</h2>
     <p>
          {{ $category->description }}
     </p>
     <a> href="{{URL::route('categories.show',['category'=>$category])}}">Переглянути окремо</a>
</div>
@endforeach
@endsection