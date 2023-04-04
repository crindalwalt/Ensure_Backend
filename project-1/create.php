<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a iTodo</title>
    <style>
        .body-app {
            background-color: #85FFBD;
            background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);


        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="body-app">
    <?php include "partials/header.php" ?>
    <div class="container-sm flex justify-center mt-4 ">
        <div class="app bg-indigo-200 p-4 w-1/4 rounded-lg shadow-lg">
            <h2 class="px-2 text-xl font-bold">Create a Unforgetable <span class="text-red-400">Todo</span></h2>
            <div class="m-4 flex flex-col">
                <label for="title">Title</label>
                <input type="text" id="title" class="px-8 py-2 border-none border-red-400 rounded-md">
            </div>
            <div class="m-4 flex flex-col">
                <label for="desc">Description</label>
                <textarea type="text" id="desc" class="px-8 py-2 border-none border-red-400 rounded-md"></textarea>
            </div>
            <div class="m-4 flex flex-col">

                <input type="submit" id="desc" class="px-8 py-2 bg-red-500 text-white rounded-md">
            </div>
        </div>
    </div>



    <?php include "partials/footer.php" ?>
</body>

</html>