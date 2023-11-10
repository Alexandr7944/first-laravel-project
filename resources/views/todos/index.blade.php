@extends('layouts.app')
@section('content')
<div class="container mx-auto p-5">
    <h1 class="text-3xl font-bold mb-5">New todos list</h1>
    <a href="{{ route('todos.create') }}" class="border-2 p-2 rounded-full">&#10010;</a>
    <div class="columns-1">
        @foreach ($todos as $todo)
            <div class="p-5 mt-5 flex gap-3 border-2 rounded-lg">
                <a href="{{ route('todos.show', $todo->id) }}"
                   class="grow {{ $todo->is_completed ? 'line-through' : 'no-underline' }}"
                >
                    {{ $loop->index + 1 }}. {{ $todo->title }}
                </a>
                <a href="{{ route('todos.edit', $todo->id) }}"
                   class="flex-none"
                   title="Редактировать"
                >&#9998;</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="post" class="flex-none">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            title="Удалить"
                    >&#10006;
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
