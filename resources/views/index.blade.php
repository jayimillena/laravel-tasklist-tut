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
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a> <br>
            </div>
        @empty
            <div>There are no task!</div>
        @endforelse
    </div>
    <div>
        {{ $tasks->links() }}
    </div>
@endsection
