@extends ('master')

@section('title')
    ToDo Module
@endsection



@section('body')
    {{--Add ToDo List--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header display-6 text-center text-success">Add ToDo List</div>
                        <div class="card-body">
                            <form action="{{route('todo.create')}}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="todo" value="" />
                                    <span class="text-danger">{{$errors->has('todo') ? $errors->first('todo'):''}}</span>
                                    <input type="submit" class="btn btn-info" value="Add Todo">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--   message--}}
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-body">
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--Manage ToDo List--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header display-6 text-center text-danger">Manage ToDo List </div>
                        <div class="card-body">

                            <table class="table-hover table table-bordered text-center">

                                <thead>
                                <tr>
                                    <th>SO NO</th>
                                    <th>ToDo Item</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($todos as $todo)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$todo->todo}}</td>
                                        <td>
                                            <a href="{{route('todo.edit',['id'=>$todo->id])}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure to delete this...')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection



