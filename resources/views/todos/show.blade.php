@extends('layouts.app')
@section('content')
<div class="container mx-auto p-10">
    <div>
        <a href="{{ route('todos.index') }}" class="outline outline-offset-2 outline-gray-500 rounded p-2">Домой</a>
    </div>
    <div class="p-5 mt-5 flex gap-3 border-2 rounded-lg">
        <div class="grow">
            <span>{{ $todos->id }}. {{ $todos->title }}</span>
            <div class="p-5 mt-5 flex gap-3 border-2 rounded-lg">
                Описание:
                </br>
                {{ $todos->description }}
            </div>
        </div>
        <a href="{{ route('todos.edit', $todos->id) }}" class="flex-none">&#9998;</a>
        <form action="{{ route('todos.destroy', $todos->id) }}" method="post" class="flex-none">
            @csrf
            @method('delete')
            <button type="submit">&#10006;</button>
        </form>
    </div>
</div>
@endsection
