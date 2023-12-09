document.addEventListener('DOMContentLoaded', function () {
    const taskList = document.getElementById('task-list');

    const sortable = new Sortable(taskList, {
        handle: '.card-header',
        animation: 150,
        onEnd: function (event) {
            // Get all sorted elements
            const sortedElements = event.from.children;

            // Iterate through the sorted elements to update priorities
            Array.from(sortedElements).forEach((element, index) => {
                const taskId = element.getAttribute('data-task-id');
                updateTaskPriority(taskId, index + 1);
            });
        }
    });

    // Update task priority in db
    // Function to update task priority via Ajax
    function updateTaskPriority(taskId, newPriority) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/tasks/${taskId}`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                priority: newPriority
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error.message));
    }
});
