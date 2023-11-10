<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();
        return view('todos.index', [
            'todos' => $todos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
        ]);
        Todos::create($data);
        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todos $todos)
    {
        return view('todos.show', [
            'todos' => $todos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todos $todos)
    {
        return view('todos.edit', [
            'todos' => $todos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todos $todos)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'is_completed' => '',
        ]);
        $data['is_completed'] = isset($data['is_completed']) && $data['is_completed'] == 1 ? true : false;
        $todos->update($data);
        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todos)
    {
        $todos->delete();
        return redirect()->route('todos.index');
    }
}
