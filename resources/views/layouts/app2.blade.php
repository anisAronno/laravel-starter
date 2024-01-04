<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900" x-data="{ isDarkMode: localStorage.getItem('color-theme') === 'dark' || window.matchMedia('(prefers-color-scheme: dark)').matches }" x-init="initTheme()">

    @include('sweetalert::alert')

    <div class="antialiased ">
        <x-admin-header />
        <x-sidebar />

        <main class="p-4 md:ml-64 min-h-screen pt-20 ">
            {{ $slot }}
        </main>
    </div>

    <script>
        function setTheme(theme) {
            document.documentElement.classList[theme === 'dark' ? 'add' : 'remove']('dark');
            localStorage.setItem('color-theme', theme);
        }

        function initTheme() {
            const isDark = localStorage.getItem('color-theme') === 'dark' || window.matchMedia(
                '(prefers-color-scheme: dark)').matches;
            setTheme(isDark ? 'dark' : 'light');
        }

        function toggleDarkMode() {
            const currentTheme = localStorage.getItem('color-theme') || 'light';
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            setTheme(newTheme);

            this.$nextTick(() => {
                this.isDarkMode = newTheme === 'dark';
            });
        }
    </script>
</body>

</html>
