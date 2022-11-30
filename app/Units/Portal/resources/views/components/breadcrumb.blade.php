
<nav class="flex justify-center items-center w-full pt-6 text-gray-400">
    <a href="{{ route($locale_prefix . '_home') }}"
        class="inline-flex items-center p-2 text-blue-dark hover:opacity-50 transition-all">
        <svg class="mr-1 h-4 w-4 transition"
            viewBox="0 0 20 20">
            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
        </svg>
        Início
    </a>

    <svg class="h-3 w-3 transition"
        viewBox="0 0 20 20">
        <use x="0" y="0" class="fill-current" xlink:href="#line-right-arrow"></use>
    </svg>

    {{ $slot }}
</nav>
