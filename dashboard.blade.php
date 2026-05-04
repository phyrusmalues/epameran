<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard — {{ config('app.name') }}</title>
    @include('partials.fonts-inter')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[var(--gov-bg)] text-[var(--gov-text)] font-sans antialiased flex flex-col">
    @include('partials.top-nav')

    <main class="mx-auto w-full max-w-4xl flex-1 px-4 py-8 sm:px-6">
        <div class="gov-card">
            <h1 class="mb-2 text-2xl font-bold text-[var(--gov-text)]">Selamat datang</h1>
            <p class="mb-6 text-[var(--gov-text-muted)]">Anda telah log masuk ke e-Pameran.</p>
            <a href="{{ route('home') }}" class="gov-link">Kembali ke Laman Utama</a>
        </div>
    </main>

    <footer class="bg-[var(--gov-footer-bg)] text-white text-center py-4 text-sm">
        <p>&copy; {{ date('Y') }} e-Pameran. Hak Cipta Terpelihara.</p>
    </footer>
</body>
</html>
