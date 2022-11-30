<header class="fixed inset-x-0 top-0 w-full z-75 text-white bg-blue"
        id="main-header-app"
        x-data="MainHeader"
        x-init="$nextTick(() => { onScroll() })"
        x-cloak
        x-on:scroll.window="onScroll()"
        x-on:keydown.escape="showMobileMenu = false">

    <div id="pre-header"
         class="relative transition-all duration-300 z-50 overflow-y-hidden"
         x-bind:class="{'bg-blue': showBgColor, 'py-1': !isSlim, 'py-0': isSlim, 'max-h-0': hidePreHeader, 'max-h-20 lg:max-h-10': !hidePreHeader}">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-between items-center lg:flex-row">
                <div class="flex justify-start text-sm">
                    <span class="hidden lg:inline-flex">Produtor de tilápia para revenda</span>
                </div>

{{--                <form action="{{ route($locale_prefix . '_home') }}"--}}
{{--                      method="post"--}}
{{--                      class="hidden lg:inline-flex flex-1 px-6 xl:px-32"--}}
{{--                      x-bind:class="{'opacity-25': loading}"--}}
{{--                      @submit.prevent="submitForm()">--}}
{{--                    <div class="floating-label z-0 w-full group">--}}
{{--                        <input--}}
{{--                                type="text"--}}
{{--                                name="search_term"--}}
{{--                                id="search_term"--}}
{{--                                placeholder=" "--}}
{{--                                maxlength="70"--}}
{{--                                x-model="formData.name"--}}
{{--                                class="block w-full rounded-md bg-gray-100 border-2 border-transparent focus:border-gray-200 focus:bg-white focus:ring-0 transition duration-300"--}}
{{--                        />--}}
{{--                        <label for="search_term"--}}
{{--                               class="absolute rounded-full duration-300 top-3 origin-0 text-gray-500 ml-1 px-3 group-focus:bg-white">--}}
{{--                            O que você procura?--}}
{{--                        </label>--}}
{{--                        <template x-if="errors.name">--}}
{{--                            <div class="text-red-600 px-4 text-sm" x-html="errors.name[0]"></div>--}}
{{--                        </template>--}}
{{--                    </div>--}}
{{--                </form>--}}

                <nav class="flex space-x-px text-sm">
                    <a href="{{ route($locale_prefix . '_support') }}"
                       class="flex items-center py-px px-2 hover:bg-white hover:text-blue rounded transition duration-300"
                       title="Alpha Fish">
                        <svg class="mr-1 h-4 w-4 fill-current stroke-1"
                                viewBox="0 0 24 24">
                            <use x="0" y="0" class="fill-current" xlink:href="#line-pin"></use>
                        </svg>
                        São Jorge D'Oeste <strong>/PR</strong>
                    </a>

                    <span class="py-px text-xs opacity-40">|</span>

                    <a href="{{ route($locale_prefix . '_support') }}"
                       class="flex items-center py-px px-2 hover:bg-white hover:text-blue rounded transition duration-300"
                       title="Alpha Fish">
                        <svg class="mr-1 h-4 w-4 fill-current stroke-1"
                                viewBox="0 0 24 24">
                            <use x="0" y="0" class="fill-current" xlink:href="#line-phone"></use>
                        </svg>
                        +55 46 <strong>9 9915 0079</strong>
                    </a>
                </nav>

                
            </div>
        </div>
    </div>

    <div id="main-header"
         class="absolute inset-x-0 transition-all duration-300 z-10"
         x-bind:class="{'bg-black': showBgColor,'bg-blue-dark': !showBgColor, 'shadow-xl': showBgColor}">

        {{-- <div class="h-px bg-white opacity-25"></div> --}}

        <div class="container mx-auto">
            <div class="flex justify-between items-center transition-all duration-300"
                x-bind:class="{'menu-slim': isSlim}">

                <div class="relative h-10 z-75 transition-all duration-300 lg:hidden"
                        x-bind:class="{'w-24 md:w-28': !isSlim, 'w-16 md:w-20': isSlim}">
                        <a href="{{ route($locale_prefix . '_home') }}"
                            class="absolute top-0 left-0 w-full bg-white px-2 shadow-md rounded-b-full"
                            x-bind:class="{'py-4': !isSlim, 'py-3': isSlim}"
                            title="Alpha Fish">
                            <span class="sr-only">{!! __('Alpha Fish') !!}</span>
                            <svg class="logo min-w-sm w-full text-white fill-current transition-all duration-300"
                                    viewBox="0 0 88 56">
                                <use x="0" y="0" xlink:href="#logo-alphafish"></use>
                            </svg>
                        </a>
                    </div>

                {{-- Mobile hamburguer menu end search icons --}}
                <div class="flex content-center lg:hidden gap-2">
                    {{--                    <a href="{{ route($locale_prefix . '_home') }}"--}}
                    {{--                       class="flex flex-wrap content-center whitespace-nowrap text-base font-medium text-white hover:text-blue-300 transition duration-200">--}}
                    {{--                        <svg class="w-10 h-10 outline-icon non-scaling-stroke stroke-2" viewBox="0 0 24 24">--}}
                    {{--                            <use x="0" y="0" xlink:href="#line-search-circle"></use>--}}
                    {{--                        </svg>--}}
                    {{--                    </a>--}}
                    
                    {{--                    <a href="{{ route($locale_prefix . '_home') }}"--}}
                    {{--                       class="flex flex-wrap content-center whitespace-nowrap text-base font-medium text-white hover:text-blue-300 transition duration-200">--}}
                    {{--                        <svg class="w-10 h-10 outline-icon non-scaling-stroke stroke-2" viewBox="0 0 24 24">--}}
                    {{--                            <use x="0" y="0" xlink:href="#line-search-circle"></use>--}}
                    {{--                        </svg>--}}
                    {{--                    </a>--}}
                    
                    <button type="button"
                            class="bg-transparent border border-white rounded p-1 inline-flex items-center justify-center text-white focus:outline-none"
                            aria-expanded="false"
                            x-on:click="toggleMobileMenu()"
                            name="open-menu">
                        <span class="sr-only">Abrir menu</span>
                        <svg class="w-6 h-6 outline-icon non-scaling-stroke stroke-2" viewBox="0 0 24 24">
                            <use x="0" y="0" xlink:href="#line-menu"></use>
                        </svg>
                    </button>
                </div>

                {{-- Desktop Header Items --}}
                <nav class="hidden lg:flex gap-1 justify-center w-full">
                    <div class="relative group">
                        <a href="{{ route($locale_prefix . '_home') }}"
                            class="text-white group-hover:bg-orange p-2 xl:p-3 2xl:p-4 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                            <svg class="text-white mr-1 h-4 w-4 transform transition"
                                 viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                            </svg>
                            {!! __('Início') !!}
                        </a>
                    </div>
                    <div class="relative group">
                        <button type="button"
                                class="group text-white group-hover:bg-orange p-2 xl:p-3 2xl:p-4 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300"
                                aria-expanded="false"
                                name="open-segments">
                            <svg class="text-white mr-1 h-4 w-4 transform transition"
                                viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                            </svg>
                            <span>{!! __('Cadeia Produtiva') !!}</span>
                            <svg class="text-white ml-1 h-5 w-5 transform group-hover:-rotate-180 transition"
                                 viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#solid-chevron-down"></use>
                            </svg>
                        </button>
                        <div class="absolute z-10 invisible group-hover:visible opacity-0 group-hover:opacity-100 left-0 transform scale-90 group-hover:scale-100 w-screen max-w-max transition duration-300 ease-out">
                            <div class="rounded-b-lg shadow-lg overflow-y-auto max-h-screen-80">
                                <div class="relative bg-orange p-px">
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                        {!! __('Reprodução') !!}
                                    </a>
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                       {!! __('Engorda') !!}
                                    </a>
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                       {!! __('Vendas e Distribuição') !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="{{ route($locale_prefix . '_comprar') }}"
                            class="text-white group-hover:bg-orange p-2 xl:p-3 2xl:p-4 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                            <svg class="text-white mr-1 h-4 w-4 transform transition"
                                 viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                            </svg>
                            {!! __('Como Comprar') !!}
                        </a>
                    </div>

                    <div class="relative transition-all duration-300"
                        x-bind:class="{'w-24 md:w-28': !isSlim, 'w-16 md:w-20': isSlim}">
                        <a href="{{ route($locale_prefix . '_home') }}"
                            class="absolute top-0 left-0 w-full bg-white shadow-md py-6 px-4 rounded-b-full"
                            title="Alpha Fish">
                            <span class="sr-only">{!! __('Alpha Fish') !!}</span>
                            <svg class="logo min-w-sm w-full text-white fill-current transition-all duration-300"
                                 viewBox="0 0 88 56">
                                <use x="0" y="0" xlink:href="#logo-alphafish"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="relative group">
                        <a href="{{ route($locale_prefix . '_instituccional') }}"
                            class="text-white group-hover:bg-orange p-2 xl:p-3 2xl:p-4 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                            <svg class="text-white mr-1 h-4 w-4 transform transition"
                                 viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                            </svg>
                            {!! __('A Alpha Fish') !!}
                        </a>
                    </div>

                    <div class="relative group">
                        <button type="button"
                                class="group text-white group-hover:bg-orange p-2 xl:p-3 2xl:p-4 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300"
                                aria-expanded="false"
                                name="open-segments">
                            <span>{!! __('A Tilápia') !!}</span>
                            <svg class="text-white ml-1 h-5 w-5 transform group-hover:-rotate-180 transition"
                                 viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#solid-chevron-down"></use>
                            </svg>
                        </button>
                        <div class="absolute z-10 invisible group-hover:visible opacity-0 group-hover:opacity-100 left-0 transform scale-90 group-hover:scale-100 w-screen max-w-max transition duration-300 ease-out">
                            <div class="rounded-b-lg shadow-lg overflow-y-auto max-h-screen-80">
                                <div class="relative bg-orange p-px">
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                        {!! __('Aquacultura Sustentável') !!}
                                    </a>
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                        {!! __('Melhor para Sua Saúde') !!}
                                    </a>
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                        {!! __('Contribuindo com o<br>Meio Ambiente') !!}
                                    </a>
                                    <a href="{{ route($locale_prefix . '_home') }}"
                                       class="leading-tight px-4 py-2 flex items-start rounded hover:bg-white text-white hover:text-orange transition duration-300">
                                        {!! __('Qualidade Dentro do<br> Seu Estabelecimento') !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <a href="{{ route($locale_prefix . '_support') }}"
                            class="text-white group-hover:bg-orange p-2 xl:p-3 2xl:p-4 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                            <svg class="text-white mr-1 h-4 w-4 transform transition"
                                 viewBox="0 0 20 20">
                                <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                            </svg>
                            {!! __('Atendimento') !!}
                        </a>
                    </div>

                </nav>
            </div>
        </div>

        {{-- <div class="h-px bg-black-light opacity-25"></div> --}}
    </div>


    {{-- Mobile menu, show/hide based on mobile menu state --}}
    @include('portal::layouts.partials.mobile-menu')

    @if(!is_active($locale_prefix . '_mainstream'))
        <div class="fixed inset-x-0 bottom-0 w-full z-75 bg-blue text-white transition-all duration-700 overflow-y-hidden"
             x-bind:class="{'max-h-0': !hidePreHeader, 'max-h-20 lg:max-h-20 border-t border-blue-light': hidePreHeader}">
            <div class="flex items-center justify-center w-full">
                <div class="p-2">Fale conosco pelo WhatsApp</div>
            </div>
        </div>
    @endif

</header>
