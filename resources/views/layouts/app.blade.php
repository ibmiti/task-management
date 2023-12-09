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
        // 1. Select element after the document has loaded
        // 2. initialize sortable instance on the task-list element which was selected in step 1.
        // 3. handle event: on grap, allow dragging
        // 4. apply animnation (occurs at 140 milliseconds)
        document.addEventListener('DOMContentLoaded', function () {
            const taskList = document.getElementById('task-list');
            new Sortable(taskList, {
                handle: '.card-header',
                animation: 150
            });
        });
    </script>
</body>
</html>
