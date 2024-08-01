
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Page</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
<body class="h-full">

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <div class="flex items-center">

                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>

                </div>


                <!-- MOBILE MENU BUTTON HTML-->
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button id="MobileMenuButton" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                </div>

            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="hidden rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
                <a href="/about" class="hidden rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="/projects" class="hidden rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                <a href="/contact" class="hidden rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-800">{{ $heading }}</h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // MOBILE MENU BUTTON TOGGLE
        var menubutton = document.getElementById('MobileMenuButton');

        menubutton.addEventListener('click', function() {
            var hidden = document.querySelectorAll('a.hidden.rounded-md.px-3.py-2.text-base.font-medium.text-gray-300.hover\\:bg-gray-700.hover\\:text-white');

            var block = document.querySelectorAll('a.block.rounded-md.px-3.py-2.text-base.font-medium.text-gray-300.hover\\:bg-gray-700.hover\\:text-white');

            if (hidden) {
                hidden.forEach(function(item) {
                    item.classList.remove('hidden');
                    item.classList.add('block');
                });
            }
            if (block) {
                block.forEach(function(item) {
                    item.classList.remove('block');
                    item.classList.add('hidden');
                });
            }
        });
        //END OF MOBILE MENU BUTTON TOGGLE


    });
</script>

</body>
</html>
