<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<body>
<nav class="bg-red-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-black hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-9 w-auto" src="https://seeklogo.com/images/G/gs-logo-0720D61074-seeklogo.com.png" alt="Your Company">
          <a href="#" class="text-white text-white rounded-md px-3 py-30 text-sm font-faktur" aria-current="page">Galeri Sepatu</a>

        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex flex-shrink-0 items-center">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="home" class="text-white hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
            <a href="galeri" class="text-white hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">Galeri</a>
            <a href="register" class="text-white hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
            <a href="#" class="text-white hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">Koleksi</a>
            <form>   
  <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only dark:text-white">Search</label>
  <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-black dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
      </div>
      <input type="search" id="default-search" class="block w-full px-[38em] py-3 ps-10 text-sm text-black border border-white rounded-lg bg-white focus:ring-black focus:border-black dark:bg-white dark:border-black dark:placeholder-black dark:text-black dark:focus:ring-black dark:focus:border-red-800" placeholder="Search Mockups, Logos..." required>
      <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-red-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-[9px] px-4 py-2  dark:bg-black dark:hover:bg-red-800 dark:focus:ring-red-800">Search</button>
  </div>
</form>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-black p-1 text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://cdn.icon-icons.com/icons2/2643/PNG/96/male_boy_person_people_avatar_white_tone_icon_159368.png" alt="">
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
      </div>
<section class="bg-red-800 dark:bg-red-800">
        <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
            <div class="w-full lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-black">
                <h2 class="flex items-center justify-center text-2xl font-bold text-gray-900 dark:text-white">
                    Sign in to Galeri
                </h2>
                <form class="mt-8 space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-white border border-white text-black text-sm rounded-lg focus:ring-red-800 focus:border-red-800 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-black dark:text-black dark:focus:ring-red-800 dark:focus:border-red-800" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-white border border-white text-black text-sm rounded-lg focus:ring-red-800 focus:border-red-800 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-black dark:text-black dark:focus:ring-red-800 dark:focus:border-red-800" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required>
                        </div>
                        <div class="ms-3 text-sm">
                        <label for="remember" class="font-medium text-white dark:text-white">Remember this device</label>
                        </div>
                        <a href="#" class="ms-auto text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Lost Password?</a>
                    </div>
                    <div class="flex items-center justify-center">
                    <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-red-800 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-800 sm:w-auto dark:bg-red-800 dark:hover:bg-red-950 dark:focus:ring-red-950">Login to your account</button></div>
                    <div class="flex items-center justify-center text-sm font-medium text-gray-900 dark:text-white">
                        Not registered yet? <a href="register" class="text-blue-600 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>