@extends('layouts.app')

@section('content')
     <h1>Створення запису</h1>

     <form action="{{ URL::route('posts.store') }}" method="post">
          @csrf
          <div>
               <p>
                    Введіть назву запису
               </p>
               <imput type="text" name="title">
               <textarea name="description" size="10"></textarea>
          </div>
          <div>
               <p>
                    Введіть контент
               </p>
               <textarea name="content" size="10"></textarea>
          </div>
          <div>
               <p>
                    Введіть опис
               </p>
               <textarea name="description" size="10"></textarea>
          </div>
          <div>
               <p>
                    Оберіть категорію
               </p>
               <select name="category_id">
                    @foreach($categories as $category)
                         <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
               </select>
          </div>
          <button type="submit">Зберегти</button>
     </form>
@endsection