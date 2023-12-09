@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Task List</h2>
        <div class="row">
            @foreach ($tasks as $task)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $task->name }}</h5>
                            <p class="card-text">Priority: {{ $task->priority }}</p>
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
    </div>
@endsection
