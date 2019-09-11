@extends('layout.layout')

@section('content')
    <h1>Edit Task</h1>
    <hr>
    <form action="{{url('tasks', [$task->id])}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" value="{{ $task->title }}" id="taskTitle" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="title">Task Description</label>
            <input type="text" value="{{ $task->description }}" id="taskDescription" class="form-control" name="description">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
