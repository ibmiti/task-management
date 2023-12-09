<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const taskList = document.getElementById('task-list');

            const sortable = new Sortable(taskList, {
                handle: '.card-header',
                animation: 150,
                onEnd: function (event){
                    // Get all sorted elements
                    const sortedElements = event.from.children;

                    // move through(iterate) the sorted elements to update priorities
                    Array.from(sortedElements).forEach((element, index) => {
                        const taskId = element.getAttribute('data-task-id');
                        updateTaskPriority(taskId, index + 1);
                    });
                }
            });

            // update task priority in db
            // Function to update task priority via Ajax
            function updateTaskPriority(taskId, newPriority) {
                    fetch(`/update-task-priority/${taskId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            priority: newPriority
                        })
                    })
                    .then(response => response.json())
                    .then(data => console.log(data))
                    .catch(error => console.error('Error:', error));
            }
        });
    </script>
</body>
</html>
