@extends('layouts.app')

@section('content')
     <h1>Створення категорії</h1>

     <form action="{{ URL::route('categories.store') }}" method="post">
          @csrf
          <div>
               <p>
                    Введіть назву категорії
               </p>
               <imput type="text" name="title">
               <textarea name="description" size="10"></textarea>
          </div>
          <div>
               <p>
                    Введіть опис
               </p>
               <textarea name="description" size="10"></textarea>
          </div>
          <button type="submit">Зберегти</button>
     </form>
@endsection