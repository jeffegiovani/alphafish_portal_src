@extends('portal::layouts.portal-pages')

@section('page_content')

    <section class="hero-section relative py-12 lg:py-16 2xl:py-20">
        <div class="container mx-auto z-10">
            <ol class="hero-breadcrumb font-body text-blueGray-600 flex flex-wrap items-center gap-3 text-sm mb-4">
                <li class="flex items-center">
                    <a class="transition duration-500  hover:text-indigo-500 underline-hover" href="{{ route($locale_prefix . '_home') }}"> Início </a>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-right-arrow"></use>
                    </svg>
                </li>
                <li class="flex items-center">
                    <a class="transition duration-500  hover:text-indigo-500 underline-hover" href="{{ route($locale_prefix . '_list') }}"> Produtos </a>
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-right-arrow"></use>
                    </svg>
                </li>
                <li class="flex items-center text-blue">
                    Todos
                </li>
            </ol>

            <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold mb-4">Produtos MM Racing Fuel</h2>
            <p class="">
                Produtos e combustíveis de alta performance para seu carro.
            </p>
        </div>
    </section>


    <section class="bg-black mb-20">

        <div class="container mx-auto">

{{--            <div class="flex justify-between mb-8 lg:mb-14">--}}
{{--                <div class="flex items-center pr-6">--}}
{{--                    <select class="block lg:hidden text-black">--}}
{{--                        <option>Todos </option>--}}
{{--                        <option>Combustíveis </option>--}}
{{--                        <option>Acabamento </option>--}}
{{--                        <option>Pneus </option>--}}
{{--                        <option>Motor Forjado </option>--}}
{{--                    </select>--}}
{{--                    <div class="hidden lg:flex flex-wrap items-center gap-2">--}}
{{--                        <a href="/" class="inline-flex border border-black-light text-black font-bold rounded py-4 px-5 transition duration-500 hover:bg-blue hover:border-primary text-xs bg-black-light">Todos</a>--}}
{{--                        <a href="/" class="inline-flex border border-white text-white font-bold rounded py-4 px-5 transition duration-500 hover:bg-blue hover:border-primary text-xs">Combustíveis</a>--}}
{{--                        <a href="/" class="inline-flex border border-white text-white font-bold rounded py-4 px-5 transition duration-500 hover:bg-blue hover:border-primary text-xs">Acabamento</a>--}}
{{--                        <a href="/" class="inline-flex border border-white text-white font-bold rounded py-4 px-5 transition duration-500 hover:bg-blue hover:border-primary text-xs">Pneus</a>--}}
{{--                        <a href="/" class="inline-flex border border-white text-white font-bold rounded py-4 px-5 transition duration-500 hover:bg-blue hover:border-primary text-xs">Motor Forjado</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-3xl:gap-4">
                <a class="group flex text-black bg-white hover:bg-blue rounded-md transition duration-300"
                   href="{{ route($locale_prefix . '_nitrometano') }}"
                   title="MM">
                    <div class="flex w-full gap-2 overflow-hidden items-center relative p-3">
                        <div class="flex flex-shrink-0 w-36 lg:w-28 xl:w-32 2xl:w-36">
                            <img alt="MM"
                                 {{--                             srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbundle%2F1.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimages%2Fbundle%2F1.png&amp;w=384&amp;q=75 2x"--}}
                                 src="{{ config('app.static_files_url') }}portal/img/produtos/nitrometano.webp"
                                 decoding="async"
                                 class="w-full transition duration-200 ease-in-out transform group-hover:scale-105">
                        </div>
                        <div class="py-3 lg:py-5">
                            <h2 class="font-bold leading-none mb-2">
                                Nitrometano
                            </h2>
                            <p class="text-xs">O mais alto nível de pureza disponível no mercado brasileiro. <strong>Saiba mais.</strong></p>
                        </div>
                    </div>
                </a>

                <a class="group flex text-black bg-white hover:bg-blue rounded-md transition duration-300"
                   href="{{ route($locale_prefix . '_metanol') }}"
                   title="MM">
                    <div class="flex w-full gap-2 overflow-hidden items-center relative p-3">
                        <div class="flex flex-shrink-0 w-36 lg:w-28 xl:w-32 2xl:w-36">
                            <img alt="MM"
                                 {{--                             srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbundle%2F3.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimages%2Fbundle%2F3.png&amp;w=384&amp;q=75 2x"--}}
                                 src="{{ config('app.static_files_url') }}portal/img/produtos/metanol.webp"
                                 decoding="async"
                                 class="w-full transition duration-200 ease-in-out transform group-hover:scale-105">
                        </div>
                        <div class="py-3 lg:py-5">
                            <h2 class="font-bold leading-none mb-2">
                                Metanol
                            </h2>
                            <p class="text-xs">Garantia de pureza mínima de 99,95%. <strong>Saiba mais.</strong></p>
                        </div>
                    </div>
                </a>

                <a class="group flex text-black bg-white hover:bg-blue rounded-md transition duration-300"
                   href="{{ route($locale_prefix . '_m5') }}"
                   title="MM">
                    <div class="flex w-full gap-2 overflow-hidden items-center relative p-3">
                        <div class="flex flex-shrink-0 w-36 lg:w-28 xl:w-32 2xl:w-36">
                            <img alt="MM"
                                 {{--                             srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbundle%2F1.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimages%2Fbundle%2F1.png&amp;w=384&amp;q=75 2x"--}}
                                 src="{{ config('app.static_files_url') }}portal/img/produtos/m5.webp"
                                 decoding="async"
                                 class="w-full transition duration-200 ease-in-out transform group-hover:scale-105">
                        </div>
                        <div class="py-3 lg:py-5">
                            <h2 class="font-bold leading-none mb-2">
                                M5
                            </h2>
                            <p class="text-xs">Combustão mais rápida e uniforme. <strong>Saiba Mais.</strong></p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>

@endsection
