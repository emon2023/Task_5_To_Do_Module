<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        return view('todo.index',['todos'=>ToDo::all()]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'todo'       => 'required',
        ]);

        ToDo::newTodo($request);
        return back()->with('message','ToDo list Create Successfully');
    }

    public function edit($id)
    {

        return view('todo.edit',['todo'=>ToDo::find($id)]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'todo'       => 'required',
        ]);

        ToDo::updateTodo($request,$id);
        return redirect('/')->with('message','ToDo list Update Successfully');
    }


    public function delete($id)
    {
        ToDo::deleteTodo($id);
        return back()->with('message','ToDo list Delete Successfully');
    }
}
