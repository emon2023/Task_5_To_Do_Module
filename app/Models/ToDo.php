<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;
    private static $todo;

    public  static function newTodo($request)
    {
        self::$todo = new ToDo();
        self::$todo->todo = $request->todo;
        self::$todo->save();
    }

    public static function updateTodo($request, $id)
    {
        self::$todo = ToDo::find($id);
        self::$todo->todo = $request->todo;
        self::$todo->save();
    }

    public static function deleteTodo($id)
    {
        self::$todo = ToDo::find($id);

        self::$todo->delete();
    }
}
