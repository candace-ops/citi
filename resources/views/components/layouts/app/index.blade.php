@props(['class' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="referrer" content="origin-when-cross-origin" />

    {{-- {{ new HtmlString(preg_replace('/<!--.*-->\s*/', '', seo()->generate())) }} --}}

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    @livewireStyles
    @stack('styles')
    @vite('resources/css/app.css')
</head>
<body class="font-interstate min-h-dvh w-screen overflow-x-hidden antialiased flex flex-col" {{ $attributes }}>
    <div class="contents" id="app">
        <livewire:session-handler />

        <main class="{{ cn('grow', $class) }}">
            {{ $slot }}
        </main>

    </div>

    @livewireScriptConfig
    @stack('scripts')
    @vite('resources/js/app.js')
</body>
</html>
