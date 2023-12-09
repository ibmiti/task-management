  @extends('layouts.app')
  @section('content')
  <div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('create_task') }}" method="post" class="mb-4">
                @csrf
                <div class="form-group">
                    <label for="taskName">Task Name</label>
                    <input type="text" class="form-control" id="taskName" name="name" required>
                </div>
                <div class="form-group">
                    <label for="taskPriority">Priority</label>
                    <input type="number" class="form-control" id="taskPriority" name="priority" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Task</button>
            </form>
        </div>
    </div>
</div>
@endsection
