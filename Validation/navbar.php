<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Navbar</title>
</head>
<body>
<nav class="bg-white border-gray-200 dark: bg-lime-500">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="https://flowbite.com" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Coder</span>
        </a>
        <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
                <div class="flex items-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="flex items-center">
            <a href="login.php" class="text-2xl font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a>
        </div>
    </div>
</nav>
</body>
</html>