<div>
    Hello I'm a blade template!
</div>

<div>
    @if(count($tasks))
        @foreach ($tasks as $task)
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        @endforeach
    @else
        <div>There are no task!</div>
    @endif
</div>
