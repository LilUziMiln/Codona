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
        
        <h1 class="text-3xl font-bold underline">Hello world!</h1>
        <ul>
            @foreach ($ingredients as $ingredient)
                <li value="{{ $ingredient -> name }}">{{ $ingredient -> name }}</li>
            @endforeach
        </ul>
    </main>   
</body>
</html>