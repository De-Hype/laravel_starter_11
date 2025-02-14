<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index(): JsonResponse
    {
        $todos = Todo::latest()->get();
        return response()->json($todos);
    }

    public function store(TodoRequest $request): JsonResponse
    {
        $todo = Todo::create($request->validated());
        return response()->json($todo, 201);
    }

    public function show(Todo $todo): JsonResponse
    {
        return response()->json($todo);
    }

    public function update(TodoRequest $request, Todo $todo): JsonResponse
    {
        $todo->update($request->validated());
        return response()->json($todo);
    }

    public function destroy(Todo $todo): JsonResponse
    {
        $todo->delete();
        return response()->json(null, 204);
    }
}