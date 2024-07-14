<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- taildindcss link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- added font-family -->
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100 h-[100vh] flex items-center justify-center">
    <div class="bg-red-100 p-12 rounded-md shadow-lg">
        <div class="flex flex-col md:flex-row justify-center items-center gap-10">
            <!-- text-div -->
            <div class="w-[90%] md:w-[50%]">
                <h3 class="text-2xl md:text-3xl font-medium bg-gradient-to-r from-blue-300 via-green-500 to-red-400 inline-block text-transparent bg-clip-text">PHP <br> CALCULATOR</h3>
            </div>
            <!-- operation-div -->
            <div class="w-[90%] md:w-[50%]">
                <form method="POST" class="flex flex-col gap-5">
                    <div>
                        <input class="w-[100%] p-2 rounded-md" name="num1" type="number" placeholder="ENTER NUMBER">
                    </div>
                    <div>
                        <input class="w-[100%] p-2 rounded-md" name="num2" type="number" placeholder="ENTER NUMBER">
                    </div>
                    <div>
                        <select class="w-full p-1 pb-2 rounded" name="operation" id="">
                            <option value="sum"> sum(+) </option>
                            <option value="sub"> sub(-) </option>
                            <option value="mul"> mul(*) </option>
                            <option value="div"> div(/) </option>
                        </select>
                    </div>
                    <div>
                        <input name="submit" class="bg-blue-300 p-3 rounded-md font-medium hover:bg-yellow-300 duration-1000" type="submit">
                    </div>
                </form>

            </div>

        </div>

        <!--  php include function code here -->
        <div class="text-center mt-8">
            <p class="text-green-600 font-medium">

                <?php

                include("./index_post.php");

                ?>


            </p>
        </div>
    </div>

</body>

</html>