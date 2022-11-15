<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>Hackathon 2022 / Hack The Future</title>
</head>
<body>
    <header>
        @csrf
            @if ($errors -> any())
                        <ul>
                            @foreach ($errors -> all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
    </header>
    <main>
        <h1>{{ $total_value }}<h1>
    </main>
</body>
</html>