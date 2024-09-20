<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //recuperation de la liste des taches
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $request->validation([
            'title'=>'required',
            'description'=>'required'
        ]);
        $task->save();
        return redirect()->route('tasks.index')->with('sucess', 'Tâche créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);
        if(!$task){
            return redirect()->route('task.index')->with('error', 'Tâche non trouvée');
        }
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        return view ('task.edt', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $request->validation([
            'title'=>'required',
            'description'=>'required'
        ]);
        $task->save();
        return redirect()->route('tasks.index')->with('sucess', 'Tâche mise à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        if(!$task){
            return redirect()->route('task.index')->with('error', 'Tâche non trouvée');
        }
        $task->delete();
        return redirect()->route('tasks.index')->with('succes', 'Tâche supprimée avec succès');
        return view('tasks.show', compact('task')); 
    }
}
