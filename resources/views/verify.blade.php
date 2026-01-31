<x-layouts.app class="flex flex-col items-center justify-center gap-y-4">

    <div class="relative size-20 flex items-center justify-center">
        <div class="absolute inset-0 border-4 border-secondary border-b-transparent rounded-full animate-spin"></div>
        <img
            src="{{ Vite::asset('resources/images/citi-logo.svg') }}"
            class="h-16"
            alt="Citi Logo"
        />
    </div>

    <p class="text-neutral-500 text-sm text-center max-w-md">
        Please wait while we are verifying your connection.
        <br />
        This is an automated process and you will be redirected shortly.
    </p>
</x-layouts.app>
