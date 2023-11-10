@extends('layouts.app')
@section('content')
<div class="container mx-auto p-10">
    <h3 class="mb-10 text-3xl font-bold">Редактировать задачу</h3>
    <div>
        <a href="{{ route('todos.index') }}" class="outline outline-offset-2 outline-gray-500 rounded p-2">Домой</a>
    </div>
    <form action="{{ route('todos.update', $todos->id) }}" method="post" class="mt-5 grid grid-cols-1 gap-4">
        @csrf
        @method('patch')
        <input type="text"
               name="title"
               class="outline outline-offset-2 outline-gray-500 rounded p-2"
               placeholder="Заголовок"
               value="{{ $todos->title }}"
               required
        />
        <input type="text"
               name="description"
               class="outline outline-offset-2 outline-gray-500 rounded p-2"
               placeholder="Описание"
               value="{{ $todos->description }}"
               required
        />
        <label class="outline outline-offset-2 outline-gray-500 rounded p-2">
            Выполнено
            <input type="hidden" name="is_completed" value="0" />
            <input type="checkbox"
                   name="is_completed"
                   @if($todos->is_completed) checked @endif
                   value="1"
            />
        </label>
        <button type="submit" class="outline outline-offset-2 outline-gray-500 rounded w-20">Изменить</button>
    </form>
</div>
@endsection
