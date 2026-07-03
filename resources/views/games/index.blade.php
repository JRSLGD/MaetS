<html>

<head>
    <title>Games</title>
</head>

<body>
    <div>
        <h1>Games</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($games as $game)
                    <tr>
                        <td>{{ $game->id }}</td>
                        <td>{{ $game->name }}</td>
                        <td>{{ $game->description }}</td>
                        <td>{{ $game->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No games found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>