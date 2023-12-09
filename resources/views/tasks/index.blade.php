@foreach ($tasks as $task)
    {{ $task->name }} - Priority: {{ $task->priority }}
    <form action="{{ route('destroy_task', $task->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
