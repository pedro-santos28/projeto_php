<head>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body>

    <div class="p-4">
    <x-navbar/>
        {{ $slot }}
    </div>
   
    @livewireScripts

</body>