<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SignUp</title>
</head>
<body>
    <!-- component -->
<div class="bg-slate-800 min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-indigo-600 px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center text-white">Sign up</h1>
                    <form action="asserts/signup.php" method="POST">
                            <input 
                                type="text"
                                class="block border border-lime-100 w-full p-3 rounded mb-4"
                                name="fullname"
                                placeholder="Full Name" />

                            <input 
                                type="text"
                                class="block border border-grey-light w-full p-3 rounded mb-4"
                                name="phone"
                                placeholder="Phone" />

                            <input 
                                type="text"
                                class="block border border-grey-light w-full p-3 rounded mb-4"
                                name="email"
                                placeholder="Email" />

                            <input 
                                type="password"
                                class="block border border-grey-light w-full p-3 rounded mb-4"
                                name="password"
                                placeholder="Password" />
                            <input 
                                type="password"
                                class="block border border-grey-light w-full p-3 rounded mb-4"
                                name="confirm_password"
                                placeholder="Confirm Password" />

                            <button
                                type="submit"
                                class="w-full text-center py-3 rounded bg-green text-black bg-lime-400 focus:outline-none my-1"
                            >Create Account</button>
                        </form>
                </div>
                <div class="text-white mt-6">
                    Already have an account? 
                    <a class="no-underline border-b border-blue text-white" href="login.php">
                        Log in
                    </a>
                </div>
            </div>
        </div>
</body>
</html>