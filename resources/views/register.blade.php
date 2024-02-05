<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<body>
<section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
            <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <h2 class="flex items-center justify-center text-2xl font-bold text-gray-900 dark:text-white">
                Create an account
                </h2>
                <form class="max-w-sm mx-auto">
                <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                <label for="floating_first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="floating_first_name" id="floating_first_name"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A-Z" required />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                <label for="floating_last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="floating_last_name" id="floating_last_name"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A-Z" required />
                </div>
                </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required>
                        </div>
                        <div class="ms-3 text-sm">
                        <label for="remember" class="font-medium text-gray-500 dark:text-gray-400">I accept the</label>
                        <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Terms and Conditions</a>  
                      </div>
                    </div>
                    <div class="flex items-center justify-center">
                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create account</button></div>
                    <div class="flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-gray-900 dark:text-white">
                    Already have an account? <a href="login" class="text-blue-600 hover:underline dark:text-blue-500">Login here.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>