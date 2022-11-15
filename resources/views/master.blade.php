<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <title>Hackathon 2022 / Hack The Future</title>
</head>
<body class="overflow-y-scroll bg-gray-900">
        <div class="grid grid-cols-[1fr,minmax(auto,240px),min(800px,100%),1fr] gap-x-8 py-8">

          <div class="col-start-2 space-y-6">
            <div class="rounded-xl border border-gray-800 bg-black p-8">
                <form name="submitIngredients" id="submitIngredients" method="post" action="{{url('submitIngredients')}}">
                    @csrf
                    <select class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" aria-labelledby="dropdownIngredient1">
                    @foreach ($ingredients as $ingredient)
                        <option id="ingredient1" value="{{ $ingredient -> ph_scale }}" class="capitalize">{{ $ingredient -> name }}</option>
                    @endforeach
                    </select>
                    <select class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" aria-labelledby="dropdownIngredient2">
                    @foreach ($ingredients as $ingredient)
                        <option id="ingredient2" value="{{ $ingredient -> ph_scale }}" class="capitalize">{{ $ingredient -> name }}</option>
                    @endforeach
                    </select>
                    
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Brew!!</button>

                </form>
            </div>
          </div>

          <div class="col-start- col-end-4 mt-28 flex items-center justify-center">

          </div>
        </div>
    </body>
</html>

<script>
function test(ingredient){
    console.log(ingredient)
    //document.getElementById("ingredient1").innerHtml = "test";
}
</script>