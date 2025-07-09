<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack('before-styles')
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    @stack('after-styles')
</head>

<body class="font-[Poppins] min-h-screen flex flex-col">
    @stack('before-scripts')
    
    <!-- Main content wrapper -->
    <div class="flex-1">
        @yield('content')
    </div>
    
    <!-- Footer will always be at bottom -->
    <x-footer/>
    
    @stack('after-scripts')
</body>
</html>