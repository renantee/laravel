<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        List of Users
                    </h2>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                @livewire('search')
            </main>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</html>