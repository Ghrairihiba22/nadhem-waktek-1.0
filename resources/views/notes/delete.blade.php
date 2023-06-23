<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supprimer Note</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <h2>Supprimer note</h2>
                    <p>Êtes-vous sûr(e) de vouloir supprimer cette note ??</p>
                    <form id="deleteForm" method="POST" action="{{ route('note.delete', $note->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                        <a href="{{ route('notes.create', $note->id) }}" class="btn btn-secondary">Fermer</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Submit the delete form using AJAX
            $('#deleteForm').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Handle the success response
                        console.log(response.message);
                        // Optionally, perform any other actions like displaying a success message or updating the UI
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle the error response
                        console.log('Error:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>
