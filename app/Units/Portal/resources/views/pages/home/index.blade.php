@extends('portal::layouts.portal-pages')

@push('svgs')
@component('portal::svg.icons.solid.play')@endcomponent
@endpush

@section('page_content')

    <div class="container mx-auto pt-4">
        <div class="grid grid-cols-1">
            <a class="h-full group flex justify-center relative overflow-hidden"
               href="/"
               title="MM">
                <img class="object-cover w-full rounded-md block max-w-none"
                     alt="MM"
                     src="{{ asset('static-files/portal/img/banners/demo-banner-1.webp') }}"
                     decoding="async"
                    {{--srcset="https://chawkbazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbanner%2Fgrid%2Fsmall%2Fbanner-1.jpg&amp;w=1080&amp;q=100 1x, https://chawkbazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbanner%2Fgrid%2Fsmall%2Fbanner-1.jpg&amp;w=2048&amp;q=100 2x"--}}
                >
            </a>
        </div>
    </div>


    <div class="container lg:w-full lg:max-w-screen-lg relative z-20 mx-auto mt-8 lg:-mt-8 mb-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-3xl">
            <a class="group flex text-white text-center bg-orange hover:bg-blue-dark rounded-md transition duration-300"
               href="{{ route($locale_prefix . '_home') }}"
               title="Alpha Fish">
                <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                    <svg class="flex h-20 w-20 transform transition"
                            viewBox="0 0 20 20">
                        <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                    </svg>
                    <div class="w-full">
                        <h2 class="font-bold font-serif text-5xl leading-none mb-1">
                            51
                        </h2>
                        <p class="">Toneladas de tilápia produzidas por mês</p>
                    </div>
                </div>
            </a>

            <a class="group flex text-white text-center bg-orange hover:bg-blue-dark rounded-md transition duration-300"
               href="{{ route($locale_prefix . '_home') }}"
               title="Alpha Fish">
                <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                    <svg class="flex h-20 w-20 transform transition"
                            viewBox="0 0 20 20">
                        <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                    </svg>
                    <div class="w-full">
                        <h2 class="font-bold font-serif text-5xl leading-none mb-1">
                            15.000
                        </h2>
                        <p class="">Metros quadrados de fazenda</p>
                    </div>
                </div>
            </a>

            <a class="group flex text-white text-center bg-orange hover:bg-blue-dark rounded-md transition duration-300"
               href="{{ route($locale_prefix . '_home') }}"
               title="Alpha Fish">
                <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                    <svg class="flex h-20 w-20 transform transition"
                            viewBox="0 0 20 20">
                        <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                    </svg>
                    <div class="w-full">
                        <h2 class="font-bold font-serif text-5xl leading-none mb-1">
                            20
                        </h2>
                        <p class="">Estados do Brasil atendidos</p>
                    </div>
                </div>
            </a>

            <a class="group flex text-white text-center bg-orange hover:bg-blue-dark rounded-md transition duration-300"
               href="{{ route($locale_prefix . '_home') }}"
               title="Alpha Fish">
                <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                    <svg class="flex h-20 w-20 transform transition"
                            viewBox="0 0 20 20">
                        <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                    </svg>
                    <div class="w-full">
                        <h2 class="font-bold font-serif text-5xl leading-none mb-1">
                            3
                        </h2>
                        <p class="">Produtos finais comercializados</p>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <section class="bg-white bg-img-blue-1 -mt-48 pt-48 pb-24">
        <div class="container md:w-full md:max-w-lg mx-auto text-center mb-10">
            <h2 class="text-2xl font-serif mb-2">Fazenda de Aquacultura</h2>
            <p class="mb-4">Nosso sistema de aquicultura integrada estressa menos os animais, resultando em um produto premium para os consumidores.</p>
    
            <a href="{{ route($locale_prefix . '_home') }}" 
                class="inline-flex px-5 py-2 text-orange hover:text-white bg-gold-500 hover:bg-orange border border-orange rounded-md transition-all duration-500 hover:tracking-wider"> 
                Quero conhecer a fazenda
            </a>
        </div>
    </section>


    <section class="bg-white py-12 text-blue-dark">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-serif mb-16">Cadeia Produtiva</h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 sm:gap-1 lg:gap-8">
                <a class="group flex text-blue-dark hover:text-white text-center bg-white hover:bg-blue-dark border-2 border-blue-dark rounded-md transition duration-300"
                   href="{{ route($locale_prefix . '_home') }}"
                   title="Alpha Fish">
                    <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                        <div class="flex w-full justify-center -mt-16">
                            <div class="flex font-serif text-2xl rounded-full w-16 h-16 bg-blue-dark text-white items-center text-center justify-center">
                                <span>01</span>
                            </div>
                        </div>
                        <svg class="flex h-20 w-20 transform transition"
                                viewBox="0 0 20 20">
                            <use x="0" y="0" class="" xlink:href="#line-home"></use>
                        </svg>
                        <div class="">
                            <h2 class="font-bold font-serif text-2xl leading-none mb-1">
                                Reprodução
                            </h2>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </a>
    
                <a class="group flex text-blue-dark hover:text-white text-center bg-white hover:bg-blue-dark border-2 border-blue-dark rounded-md transition duration-300"
                   href="{{ route($locale_prefix . '_home') }}"
                   title="Alpha Fish">
                    <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                        <div class="flex w-full justify-center -mt-16">
                            <div class="flex font-serif text-2xl rounded-full w-16 h-16 bg-blue-dark text-white items-center text-center justify-center">
                                <span>02</span>
                            </div>
                        </div>
                        <svg class="flex h-20 w-20 transform transition"
                                viewBox="0 0 20 20">
                            <use x="0" y="0" class="" xlink:href="#line-home"></use>
                        </svg>
                        <div class="">
                            <h2 class="font-bold font-serif text-2xl leading-none mb-1">
                                Engorda
                            </h2>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </a>
    
                <a class="group flex text-blue-dark hover:text-white text-center bg-white hover:bg-blue-dark border-2 border-blue-dark rounded-md transition duration-300"
                   href="{{ route($locale_prefix . '_home') }}"
                   title="Alpha Fish">
                    <div class="flex flex-wrap w-full gap-2 items-center justify-center relative p-8">
                        <div class="flex w-full justify-center -mt-16">
                            <div class="flex font-serif text-2xl rounded-full w-16 h-16 bg-blue-dark text-white items-center text-center justify-center">
                                <span>03</span>
                            </div>
                        </div>
                        <svg class="flex h-20 w-20 transform transition"
                                viewBox="0 0 20 20">
                            <use x="0" y="0" class="" xlink:href="#line-home"></use>
                        </svg>
                        <div class="">
                            <h2 class="font-bold font-serif text-2xl leading-none mb-1">
                                Vendas
                            </h2>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="bg-white p-12 lg:pl-0 bg-img-fish-pattern">

        <div class="flex flex-col flex-wrap md:flex-row justify-end items-center p-10 lg:pl-20 lg:pr-0 lg:py-32 rounded-xl lg:rounded-r-full bg-black text-white w-full md:w-4/5 lg:w-2/3 gap-10">

            <div class="w-full md:w-2/3 md:max-w-xl text-center md:text-left">
                <h2 class="text-2xl font-serif mb-6">Assista a Alpha Fish em Detalhes</h2>
                <p>
                    Pode resumir o contexto do vídeo aqui, ou usar como complemento de uma chamada para ação. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra nulla sed volutpat blandit. Nunc sit amet massa et massa porta sodales consectetur sit amet lacus. Vestibulum ac tincidunt lectus. Aliquam luctus arcu urna, et fringilla ligula tincidunt ut.
                </p>
            </div>

            <a href="#" 
                class="flex flex-col items-center justify-center bg-blue hover:bg-blue-dark text-white hover:tracking-widest rounded-full h-40 w-40 md:-mr-12 border-2 border-blue hover:border-white transition-all duration-500"
                title="Assistir ao vídeo">
                <svg class="flex h-12 w-12 transform transition mb-4"
                        viewBox="0 0 40 48">
                    <use x="0" y="0" class="fill-current" xlink:href="#solid-play"></use>
                </svg>
                <span class="">ASSISTIR</span>
            </a>
        </div>

    </section>

    
    <section class="py-24">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-serif mb-8">Parceiros</h2>
            <img src="{{ asset('static-files/portal/img/parceiros-demo.png') }}" 
                alt="Alpha Fish"
                class="m-auto flex">
        </div>
    </section>

@endsection
