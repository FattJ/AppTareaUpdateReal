<?php

namespace App\Http\Controllers;

use Session;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tasks = Task::all();

        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {

        $task = new Task;

        $task->title = $request->title;
        $task->deadline = $request->deadline;
        $task->description = $request->description;
        $task->is_complete = false;
        $task->project_id=$request->project_id;

        $task->save();

        Session::flash('exito', 'Se guardo tu tarea correctamente');
        if ($request->source =='proyectos') {
            return redirect()->route('proyectos.index');
        }else{
          return redirect()->route('tareas.index');  
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

         Session::flash('edit', 'Los cambios no se pueden cambiar');

        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\  $
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $task = Task::find($id);  

        $task->title = $request->title;
        $task->deadline = $request->deadline;
        $task->description = $request->description;
       
        $task->save();

           Session::flash('date', 'Tu tarea se edito correctamente');

          return redirect ()->route('tareas.index');
    }
      
      public function status($id)
      {

        $task = task::find($id);
        $task->is_complete = true;
        $task->save();

           Session::flash('info', 'Tarea completada');

          return redirect()->back();
      }
     
    public function destroy( $id)
    {
       
        $task = Task::find( $id);
        $task->delete();

           Session::flash('alert', 'Se elimino tu tarea correctamente');

        return redirect()->back();
}
}