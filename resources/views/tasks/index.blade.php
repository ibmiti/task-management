@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Task List</h2>
    <h5>Reload page to see update</h5>
        <div class="row" id="task-list">
            @foreach ($tasks as $task)
                <div class="col-md-4 mb-4" data-task-id="{{ $task->id }}">
                    <div class="card">
                        <div class="card-header" style="cursor: grab;">
                            Drag Handle
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $task->name }}</h5>
                            <p class="card-text">Priority: {{ $task->priority }}</p>
                            <p class="card-text">Project: {{ $task->project }}</p>
                                <!-- Separate deletion form -->
                            <form action="{{ route('destroy_task', $task->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
           <!-- Button to create a new task -->
           <div class="text-center mt-4">
                 <a href="{{ route('tasks_create_view') }}" class="btn btn-success">Create New Task</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
    <script src="{{ asset('js/task.js') }}"></script>
@endsection
