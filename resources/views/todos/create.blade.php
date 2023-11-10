@extends('layouts.app')
@section('content')
    <div class="container mx-auto p-10">
        <h3 class="mb-5 text-3xl font-bold">Добавить задачу</h3>
        <div>
            <a href="{{ route('todos.index') }}" class="outline outline-offset-2 outline-gray-500 rounded p-2">Домой</a>
        </div>
        <form action="{{ route('todos.store') }}" method="post" class="flex flex-col gap-5 mt-5">
            @csrf
            <input type="text"
                   name="title"
                   class="outline outline-offset-2 outline-gray-500 rounded p-2"
                   placeholder="Заголовок"
                   required
            >
            <input type="text"
                   name="description"
                   class="outline outline-offset-2 outline-gray-500 rounded p-2"
                   placeholder="Описание"
                   required
            >
            <button type="submit" class="outline outline-offset-2 outline-gray-500 rounded w-20">
                Сохранить
            </button>
        </form>
    </div>
@endsection
