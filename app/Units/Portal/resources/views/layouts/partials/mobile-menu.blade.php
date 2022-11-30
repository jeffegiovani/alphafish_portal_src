<div x-show="showMobileMenu" x-cloak>
    <div id="mobile-menu"
         class="fixed inset-0 z-75"
         x-bind:class="{'hiddenn': !showMobileMenu}">

        <div class="absolute inset-0 bg-black"
             x-show="showMobileMenu"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-90"
             x-transition:leave="transition ease-out delay-300 duration-500"
             x-transition:leave-start="opacity-90"
             x-transition:leave-end="opacity-0">
        </div>

        <div class="fixed top-0 inset-x-0 p-2 transition transform origin-top-right max-h-screen-80 overflow-y-auto"
             x-on:click.away="toggleMobileMenu()"
             x-show="showMobileMenu"
             x-transition:enter="transition ease-out delay-200 duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <a href="{{ route($locale_prefix . '_home') }}" class="text-blue">
                                <span class="sr-only">Performance</span>
                                <svg class="logo min-w-1/4 fill-current transition-all duration-300 w-24"
                                     viewBox="0 0 88 56">
                                     <use x="0" y="0" xlink:href="#logo-alphafish"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                                    x-on:click="toggleMobileMenu()"
                                    name="open-segments">
                                <span class="sr-only">{{ __('Fechar menu') }}</span>
                                <svg class="w-6 h-6 outline-icon non-scaling-stroke stroke-2" viewBox="0 0 24 24">
                                    <use x="0" y="0" xlink:href="#line-x"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="">
                        <nav>
                            <ul class="flex flex-col gap-2">
                                <li>
                                    <a href="{{ route($locale_prefix . '_home') }}" 
                                    class="flex items-center text-blue hover:text-blue-dark transition">
                                        <svg class="mr-2 h-5 w-5 transition"
                                            viewBox="0 0 20 20">
                                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                        </svg>
                                        Início
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route($locale_prefix . '_home') }}" 
                                    class="flex items-center text-blue hover:text-blue-dark transition">
                                        <svg class="mr-2 h-5 w-5 transition"
                                            viewBox="0 0 20 20">
                                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                        </svg>
                                        Cadeia Produtiva
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route($locale_prefix . '_comprar') }}" 
                                    class="flex items-center text-blue hover:text-blue-dark transition">
                                        <svg class="mr-2 h-5 w-5 transition"
                                            viewBox="0 0 20 20">
                                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                        </svg>
                                        Como Comprar
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route($locale_prefix . '_home') }}" 
                                    class="flex items-center text-blue hover:text-blue-dark transition">
                                        <svg class="mr-2 h-5 w-5 transition"
                                            viewBox="0 0 20 20">
                                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                        </svg>
                                        A Tilápia
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route($locale_prefix . '_instituccional') }}" 
                                    class="flex items-center text-blue hover:text-blue-dark transition">
                                        <svg class="mr-2 h-5 w-5 transition"
                                            viewBox="0 0 20 20">
                                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                        </svg>
                                        A Alpha Fish
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route($locale_prefix . '_support') }}" 
                                    class="flex items-center text-blue hover:text-blue-dark transition">
                                        <svg class="mr-2 h-5 w-5 transition"
                                            viewBox="0 0 20 20">
                                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                        </svg>
                                        Atendimento
                                    </a>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">

                        <a href="{{ route($locale_prefix . '_support') }}"
                           class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Atendimento
                        </a>

                        <a href="{{ route($locale_prefix . '_home') }}"
                           class="text-base font-medium text-gray-900 hover:text-gray-700">
                            Privacidade
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
