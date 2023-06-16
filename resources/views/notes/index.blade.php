<!-- resources/views/notes/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Notes</title>
</head>

<body>
    <h1>Notes</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('notes.create') }}">Créer une note</a>

    <ul>
        @foreach ($notes as $note)
            <li>
                <h3>{{ $note->title }}</h3>
                <p>{{ $note->content }}</p>
            </li>
        @endforeach
    </ul>
</body>

</html>
