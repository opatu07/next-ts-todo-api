<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $todos = Todo::select(['id', 'title', 'content'])->get();
            return response()->json(['todos' => $todos]);
        } catch (Exception $error) {
            return $error;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $todos = new Todo;
            $todos->title = $request->title;
            $todos->content = $request->content;
            $todos->save();
            return response()->json(['createFlg' => true]);
        } catch (Exception $error) {
            return $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return response()->json(['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $todo = Todo::find($id);
            $todo->title = $request->title;
            $todo->content = $request->content;
            $todo->save();
            return response()->json(['updateFlg' => true]);
        } catch (Exception $error) {
            return $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $todo = Todo::find($id);
            $todo->delete();
            $todos = Todo::select(['id', 'title', 'content'])->get();
            return response()->json(['todos' => $todos]);
        } catch (Exception $error) {
            return $error;
        }
    }
}
