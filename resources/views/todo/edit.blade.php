@extends ('master')

@section('title')
    ToDo Module
@endsection



@section('body')
    {{--Edit ToDo List--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header display-6 text-center text-success">Edit ToDo List</div>
                        <div class="card-body">
                            <form action="{{route('todo.update',['id'=>$todo->id])}}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" name="todo" value="{{$todo->todo}}"  />
                                    <span class="text-danger">{{$errors->has('todo') ? $errors->first('todo'):''}}</span>
                                    <input type="submit" class="btn btn-success" value="Update Todo">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
