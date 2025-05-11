<!DOCTYPE html>
<html>

<head>
    @filemanagerStyles
</head>

<body>

</body>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            <x-livewire-filemanager />

            @filemanagerScripts
        </main>
    </div>
</body>

</html>
