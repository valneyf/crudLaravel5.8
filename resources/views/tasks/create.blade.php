@extends('layout.layout')

@section('content')
    <h1>Add New Task</h1>
    <hr>
    <form action="/tasks" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" name="title" id="taskTitle" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Task Description</label>
            <input type="text" name="description" id="taskDescription" class="form-control">
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

