@extends('layouts.app')

@section('title', 'Laravel Tasks List')
@section('content')
    <div>
        Hello I'm a blade template!
    </div>

    <div>
        <a href="{{ route('task.create') }}">Add Task</a>
    </div>

    <div>
        @if(count($tasks))
            @foreach ($tasks as $task)
                <a href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a> <br>
            @endforeach
        @else
            <div>There are no task!</div>
        @endif
    </div>
@endsection
