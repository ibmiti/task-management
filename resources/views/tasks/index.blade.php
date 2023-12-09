@foreach ($tasks as $task)
    {{ $task->name }} - Priority: {{ $task->priority }}
    <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
