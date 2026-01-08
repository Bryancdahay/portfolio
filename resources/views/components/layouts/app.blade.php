<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Portfolio | 3rd Year</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #ffffff; }
        .bg-gradient-tech { background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); }
        .text-violet-blue { color: #4f46e5; }
    </style>
</head>
<body class="font-sans text-gray-900">
    <nav class="flex justify-between items-center p-6 bg-white shadow-sm sticky top-0 z-50">
        <div class="text-2xl font-bold text-violet-600">Dev.Portfolio</div>
        <div class="space-x-8">
            <a href="{{ route('home') }}" class="hover:text-blue-500 font-medium">Home</a>
            <a href="{{ route('about') }}" class="hover:text-blue-500 font-medium">About</a>
            <a href="{{ route('projects') }}" class="hover:text-blue-500 font-medium">Projects</a>
            <a href="{{ route('contact') }}" class="hover:text-blue-500 font-medium">Contact</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-10 text-gray-400 border-t">
        &copy; {{ date('Y') }} | IT Student Portfolio
    </footer>
</body>
</html>
