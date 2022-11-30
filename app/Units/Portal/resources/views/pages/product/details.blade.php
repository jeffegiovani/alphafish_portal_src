@extends('portal::layouts.portal-pages')

@section('page_content')

    <div class="container mx-auto">

        <div class="">
            <div class="flex items-center">
                <ol class="hero-breadcrumb font-body text-blueGray-600 flex flex-wrap items-center gap-3 text-sm">
                    <li class="flex items-center">
                        <a class="inline-flex items-center" href="/">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 class="mr-2" height="1em" width="1em"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                      d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"></path>
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                      d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69"></path>
                            </svg>
                            Início
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                            <use x="0" y="0" xlink:href="#line-right-arrow"></use>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a class=""
                           href="{{ route($locale_prefix . '_list') }}">
                            Produtos
                        </a>
                    </li>
                    <li class="text-base text-skin-base mt-[1px]">
                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                            <use x="0" y="0" xlink:href="#line-right-arrow"></use>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a class=""
                           href="{{ route($locale_prefix . '_details') }}">
                            Nome do produto
                        </a>
                    </li>
                </ol>
            </div>
            <div class="pt-6 md:pt-7 pb-2">
                <div class="lg:grid grid-cols-10 gap-7 2xl:gap-8">
                    <div class="col-span-5 xl:col-span-6 overflow-hidden mb-6 md:mb-8 lg:mb-0">
                        <div class="w-full xl:flex xl:flex-row-reverse">
                            <div class="w-full xl:ms-5 mb-2.5 md:mb-3 border border-skin-base overflow-hidden rounded-md relative">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events"
                                     id="productGallery">
                                    <img alt="MM"
                                         src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-1.png&amp;w=1920&amp;q=75"
                                         decoding="async"
                                         class="rounded-md"
                                         srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-1.png&amp;w=750&amp;q=75 1x, https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-1.png&amp;w=1920&amp;q=75 2x">
                                </div>
                                <div class="flex items-center justify-between w-full absolute top-2/4 z-10 px-2.5">
                                    <div class="w-7 h-7 md:w-8 md:h-8 lg:w-9 lg:h-9 xl:w-10 xl:h-10 text-base lg:text-lg xl:text-xl flex items-center cursor-pointer justify-center rounded-full bg-skin-fill transition duration-300 hover:bg-skin-primary hover:text-skin-inverted focus:outline-none transform -translate-y-1/2 shadow-navigation">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 512 512" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                        </svg>
                                    </div>
                                    <div class="w-7 h-7 md:w-8 md:h-8 lg:w-9 lg:h-9 xl:w-10 xl:h-10 text-base lg:text-lg xl:text-xl flex items-center justify-center cursor-pointer rounded-full bg-skin-fill transition duration-300 hover:bg-skin-primary hover:text-skin-inverted focus:outline-none transform -translate-y-1/2 shadow-navigation swiper-button-disabled">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 512 512" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink-0 xl:w-[150px] 2xl:w-[170px]">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-thumbs"
                                     id="productGalleryThumbs">
                                    <div class="swiper-wrapper"
                                         style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide flex items-center justify-center cursor-pointer rounded overflow-hidden border border-skin-base transition hover:opacity-75 swiper-slide-visible swiper-slide-active"
                                             style="width: 139px;">
                                            <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                <div style="box-sizing: border-box; display: block; max-width: 100%;">
                                                    <img alt="" aria-hidden="true"
                                                         src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTcwIiBoZWlnaHQ9IjE3MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                                         style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                                                </div>
                                                <img alt="Product thumb gallery 1"
                                                     src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-1.png&amp;w=384&amp;q=75"
                                                     decoding="async" data-nimg="intrinsic"
                                                     style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                     srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-1.png&amp;w=256&amp;q=75 1x, https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-1.png&amp;w=384&amp;q=75 2x">
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                        <div class="swiper-slide flex items-center justify-center cursor-pointer rounded overflow-hidden border border-skin-base transition hover:opacity-75 swiper-slide-visible swiper-slide-next"
                                             style="width: 139px;">
                                            <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                <div style="box-sizing: border-box; display: block; max-width: 100%;">
                                                    <img alt="" aria-hidden="true"
                                                         src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTcwIiBoZWlnaHQ9IjE3MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                                         style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                                                </div>
                                                <img alt="Product thumb gallery 2"
                                                     src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-2.png&amp;w=384&amp;q=75"
                                                     decoding="async" data-nimg="intrinsic"
                                                     style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                     srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-2.png&amp;w=256&amp;q=75 1x, https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-2.png&amp;w=384&amp;q=75 2x">
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-thumb-active swiper-slide-visible flex items-center justify-center cursor-pointer rounded overflow-hidden border border-skin-base transition hover:opacity-75"
                                             style="width: 139px;">
                                            <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                <div style="box-sizing: border-box; display: block; max-width: 100%;">
                                                    <img alt="" aria-hidden="true"
                                                         src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTcwIiBoZWlnaHQ9IjE3MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                                         style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                                                </div>
                                                <img alt="Product thumb gallery 3"
                                                     src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-3.png&amp;w=384&amp;q=75"
                                                     decoding="async" data-nimg="intrinsic"
                                                     style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"
                                                     srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-3.png&amp;w=256&amp;q=75 1x, https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-3-3.png&amp;w=384&amp;q=75 2x">
                                                <noscript></noscript>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 flex flex-col col-span-5 xl:col-span-4 xl:ps-2">
                        <div class="pb-3 lg:pb-5">
                            <div class="md:mb-2.5 block -mt-1.5">
                                <h2 class="text-skin-base text-lg md:text-xl xl:text-2xl font-medium transition-colors duration-300 text-blue">
                                    Nome deste produto
                                </h2>
                            </div>
                            <div class="flex items-center mt-5">
                                <div class="text-skin-base font-bold text-base md:text-xl xl:text-[22px]">R$25,00 -
                                    R$40,00
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 pt-0.5"><h4
                                    class="text-15px text-skin-base text-opacity-70 font-normal mb-3 capitalize">
                                disponível em:</h4>
                            <ul class="flex flex-wrap -me-2">
                                <li class="cursor-pointer rounded border h-9 md:h-10 p-1 mb-2 md:mb-3 me-2 flex justify-center items-center font-medium text-sm md:text-15px text-skin-base transition duration-200 ease-in-out hover:text-skin-primary hover:border-skin-primary px-3">
                                    12 litros
                                </li>
                                <li class="cursor-pointer rounded border h-9 md:h-10 p-1 mb-2 md:mb-3 me-2 flex justify-center items-center font-medium text-sm md:text-15px text-skin-base transition duration-200 ease-in-out hover:text-skin-primary hover:border-skin-primary px-3">
                                    24 litros
                                </li>
                                <li class="cursor-pointer rounded border h-9 md:h-10 p-1 mb-2 md:mb-3 me-2 flex justify-center items-center font-medium text-sm md:text-15px text-skin-base transition duration-200 ease-in-out hover:text-skin-primary hover:border-skin-primary px-3">
                                    36 litros
                                </li>
                            </ul>
                        </div>
                        <div class="pb-2"></div>
                        <div class="pt-1.5 lg:pt-3 xl:pt-4 space-y-2.5 md:space-y-3.5">
                            <div class="flex items-center justify-between rounded overflow-hidden flex-shrink-0 h-11 md:h-14 bg-skin-button-secondary">
                                <button class="flex items-center justify-center flex-shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus-visible:outline-none w-10 h-10 rounded-full transform scale-80 lg:scale-100 text-skin-base hover:bg-skin-button-hover ms-auto">
                                    <span class="sr-only">button-minus</span>
                                    <svg class="transition-all" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                  fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                                <span class="font-semibold text-skin-base flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default flex-shrink-0 text-base md:text-[17px] w-12 md:w-20 xl:w-28">1</span>
                                <button class="group flex items-center justify-center h-full flex-shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus-visible:outline-none w-10 h-10 rounded-full scale-80 lg:scale-100 text-heading hover:bg-skin-button-hover me-auto"
                                        title=""><span class="sr-only">button-plus</span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                  fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <button data-variant="primary"
                                    class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-skin-primary text-skin-inverted tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 cursor-not-allowed hover:cursor-not-allowed bg-opacity-50 hover:bg-opacity-50 w-full px-1.5"
                                    disabled="">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="me-3">
                                    <g clip-path="url(#clip0)">
                                        <path d="M19.7999 19.0172L18.5402 4.8319C18.5132 4.51697 18.2478 4.27853 17.9374 4.27853H15.3459C15.31 1.91207 13.3754 0 10.9999 0C8.62447 0 6.68991 1.91207 6.65392 4.27853H4.06251C3.74758 4.27853 3.48664 4.51697 3.45965 4.8319L2.19993 19.0172C2.19993 19.0352 2.19543 19.0532 2.19543 19.0712C2.19543 20.6863 3.6756 22 5.49768 22H16.5022C18.3243 22 19.8044 20.6863 19.8044 19.0712C19.8044 19.0532 19.8044 19.0352 19.7999 19.0172ZM10.9999 1.21472C12.705 1.21472 14.0952 2.58241 14.1312 4.27853H7.86864C7.90464 2.58241 9.29482 1.21472 10.9999 1.21472ZM16.5022 20.7853H5.49768C4.35494 20.7853 3.42815 20.0294 3.41016 19.0982L4.61588 5.49775H6.64942V7.34233C6.64942 7.67975 6.91936 7.94969 7.25678 7.94969C7.59421 7.94969 7.86415 7.67975 7.86415 7.34233V5.49775H14.1312V7.34233C14.1312 7.67975 14.4012 7.94969 14.7386 7.94969C15.076 7.94969 15.3459 7.67975 15.3459 7.34233V5.49775H17.3795L18.5897 19.0982C18.5717 20.0294 17.6404 20.7853 16.5022 20.7853Z"
                                              fill="#ffffff" stroke="#ffffff" stroke-width="0.1"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="22" height="22" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Add ao carrinho
                            </button>
                            <div class="grid grid-cols-2 gap-2.5">
                                <button data-variant="border"
                                        class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-skin-inverted text-skin-base border border-skin-four tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 group hover:text-skin-primary false">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                         viewBox="0 0 512 512"
                                         class="text-2xl md:text-[26px] me-2 transition-all group-hover:text-skin-primary"
                                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M352 56h-1c-39.7 0-74.8 21-95 52-20.2-31-55.3-52-95-52h-1c-61.9.6-112 50.9-112 113 0 37 16.2 89.5 47.8 132.7C156 384 256 456 256 456s100-72 160.2-154.3C447.8 258.5 464 206 464 169c0-62.1-50.1-112.4-112-113zm41.6 229.2C351 343.5 286.1 397.3 256 420.8c-30.1-23.5-95-77.4-137.6-135.7C89.1 245.1 76 198 76 169c0-22.6 8.8-43.8 24.6-59.8 15.9-16 37-24.9 59.6-25.1H161.1c14.3 0 28.5 3.7 41.1 10.8 12.2 6.9 22.8 16.7 30.4 28.5 5.2 7.9 14 12.7 23.5 12.7s18.3-4.8 23.5-12.7c7.7-11.8 18.2-21.6 30.4-28.5 12.6-7.1 26.8-10.8 41.1-10.8h.9c22.5.2 43.7 9.1 59.6 25.1 15.9 16 24.6 37.3 24.6 59.8-.2 29-13.3 76.1-42.6 116.2z"></path>
                                    </svg>
                                    Favoritar
                                </button>
                                <div class="relative group">
                                    <button data-variant="border"
                                            class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-skin-inverted text-skin-base border border-skin-four tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 w-full hover:text-skin-primary false">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 512 512"
                                             class="text-2xl md:text-[26px] me-2 transition-all group-hover:text-skin-primary"
                                             height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-linejoin="round" stroke-width="32"
                                                  d="M448 256L272 88v96C103.57 184 64 304.77 64 424c48.61-62.24 91.6-96 208-96v96z"></path>
                                        </svg>
                                        Compartilhar
                                    </button>
{{--                                    <div class="shadow-card bg-skin-fill rounded-md p-4 md:p-6 lg:p-7 absolute z-10 end-0 w-[300px] md:min-w-[400px] transition-all duration-300 opacity-0 invisible top-[130%]">--}}
{{--                                        <h3 class="text-skin-base text-15px sm:text-base font-semibold mb-2">Share in--}}
{{--                                            social network</h3>--}}
{{--                                        <p class="text-skin-muted text-sm leading-7 lg:leading-[1.85em]">To reach the--}}
{{--                                            highest traffic view share this product</p>--}}
{{--                                        <div class="flex items-center flex-wrap space-s-2 mb-4">--}}
{{--                                            <button aria-label="facebook" class="react-share__ShareButton"--}}
{{--                                                    style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">--}}
{{--                                                <svg viewBox="0 0 64 64" width="40" height="40"--}}
{{--                                                     class="transition-all hover:opacity-90">--}}
{{--                                                    <circle cx="32" cy="32" r="31" fill="#3b5998"></circle>--}}
{{--                                                    <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"--}}
{{--                                                          fill="white"></path>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <button aria-label="twitter" class="react-share__ShareButton"--}}
{{--                                                    style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">--}}
{{--                                                <svg viewBox="0 0 64 64" width="40" height="40"--}}
{{--                                                     class="transition-all hover:opacity-90">--}}
{{--                                                    <circle cx="32" cy="32" r="31" fill="#00aced"></circle>--}}
{{--                                                    <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z"--}}
{{--                                                          fill="white"></path>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <button aria-label="whatsapp" class="react-share__ShareButton"--}}
{{--                                                    style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">--}}
{{--                                                <svg viewBox="0 0 64 64" width="40" height="40"--}}
{{--                                                     class="transition-all hover:opacity-90">--}}
{{--                                                    <circle cx="32" cy="32" r="31" fill="#25D366"></circle>--}}
{{--                                                    <path d="m42.32286,33.93287c-0.5178,-0.2589 -3.04726,-1.49644 -3.52105,-1.66732c-0.4712,-0.17346 -0.81554,-0.2589 -1.15987,0.2589c-0.34175,0.51004 -1.33075,1.66474 -1.63108,2.00648c-0.30032,0.33658 -0.60064,0.36247 -1.11327,0.12945c-0.5178,-0.2589 -2.17994,-0.80259 -4.14759,-2.56312c-1.53269,-1.37217 -2.56312,-3.05503 -2.86603,-3.57283c-0.30033,-0.5178 -0.03366,-0.80259 0.22524,-1.06149c0.23301,-0.23301 0.5178,-0.59547 0.7767,-0.90616c0.25372,-0.31068 0.33657,-0.5178 0.51262,-0.85437c0.17088,-0.36246 0.08544,-0.64725 -0.04402,-0.90615c-0.12945,-0.2589 -1.15987,-2.79613 -1.58964,-3.80584c-0.41424,-1.00971 -0.84142,-0.88027 -1.15987,-0.88027c-0.29773,-0.02588 -0.64208,-0.02588 -0.98382,-0.02588c-0.34693,0 -0.90616,0.12945 -1.37736,0.62136c-0.4712,0.5178 -1.80194,1.76053 -1.80194,4.27186c0,2.51134 1.84596,4.945 2.10227,5.30747c0.2589,0.33657 3.63497,5.51458 8.80262,7.74113c1.23237,0.5178 2.1903,0.82848 2.94111,1.08738c1.23237,0.38836 2.35599,0.33657 3.24402,0.20712c0.99159,-0.15534 3.04985,-1.24272 3.47963,-2.45956c0.44013,-1.21683 0.44013,-2.22654 0.31068,-2.45955c-0.12945,-0.23301 -0.46601,-0.36247 -0.98382,-0.59548m-9.40068,12.84407l-0.02589,0c-3.05503,0 -6.08417,-0.82849 -8.72495,-2.38189l-0.62136,-0.37023l-6.47252,1.68286l1.73463,-6.29129l-0.41424,-0.64725c-1.70875,-2.71846 -2.6149,-5.85116 -2.6149,-9.07706c0,-9.39809 7.68934,-17.06155 17.15993,-17.06155c4.58253,0 8.88029,1.78642 12.11655,5.02268c3.23625,3.21036 5.02267,7.50812 5.02267,12.06476c-0.0078,9.3981 -7.69712,17.06155 -17.14699,17.06155m14.58906,-31.58846c-3.93529,-3.80584 -9.1133,-5.95471 -14.62789,-5.95471c-11.36055,0 -20.60848,9.2065 -20.61625,20.52564c0,3.61684 0.94757,7.14565 2.75211,10.26282l-2.92557,10.63564l10.93337,-2.85309c3.0136,1.63108 6.4052,2.4958 9.85634,2.49839l0.01037,0c11.36574,0 20.61884,-9.2091 20.62403,-20.53082c0,-5.48093 -2.14111,-10.64081 -6.03239,-14.51915"--}}
{{--                                                          fill="white"></path>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                            <button aria-label="linkedin" class="react-share__ShareButton"--}}
{{--                                                    style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">--}}
{{--                                                <svg viewBox="0 0 64 64" width="40" height="40"--}}
{{--                                                     class="transition-all hover:opacity-90">--}}
{{--                                                    <circle cx="32" cy="32" r="31" fill="#007fb1"></circle>--}}
{{--                                                    <path d="M20.4,44h5.4V26.6h-5.4V44z M23.1,18c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1 c1.7,0,3.1-1.4,3.1-3.1C26.2,19.4,24.8,18,23.1,18z M39.5,26.2c-2.6,0-4.4,1.4-5.1,2.8h-0.1v-2.4h-5.2V44h5.4v-8.6 c0-2.3,0.4-4.5,3.2-4.5c2.8,0,2.8,2.6,2.8,4.6V44H46v-9.5C46,29.8,45,26.2,39.5,26.2z"--}}
{{--                                                          fill="white"></path>--}}
{{--                                                </svg>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-skin-muted text-sm leading-7 lg:leading-[1.85em]">or copy--}}
{{--                                            link</p>--}}
{{--                                        <div class="relative mt-2.5 mb-1.5">--}}
{{--                                            <div class="w-full"><input id="shareLink" name="shareLink" type="link"--}}
{{--                                                                       placeholder=""--}}
{{--                                                                       class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-skin-base bg-skin-fill border-skin-two focus:border-2 focus:outline-none focus:border-skin-primary h-11 md:h-12 px-4 border-skin-base rounded-md focus:outline focus:border-skin-primary"--}}
{{--                                                                       autocomplete="off" spellcheck="false"--}}
{{--                                                                       aria-invalid="false"--}}
{{--                                                                       value="https://borobazar.vercel.app/products/skinnyPop-popcorn-skinnyPack-original">--}}
{{--                                            </div>--}}
{{--                                            <span class="absolute end-0.5 top-[6%] h-[90%] px-2 text-skin-primary text-sm uppercase font-bold flex items-center bg-skin-fill cursor-pointer"--}}
{{--                                                  role="button">copy</span></div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        {{--                        <ul class="pt-5 xl:pt-6">--}}
                        {{--                            <li class="text-sm md:text-15px text-skin-base text-opacity-80 inline-flex items-center justify-center me-2 relative top-1">--}}
                        {{--                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"--}}
                        {{--                                     xmlns="http://www.w3.org/2000/svg" class="me-2">--}}
                        {{--                                    <path d="M17.125 1H12.3677C11.4662 1 10.6188 1.351 9.98123 1.98849L1.63974 10.33C1.22725 10.7425 1 11.2908 1 11.8765C1 12.4593 1.22725 13.0075 1.63974 13.42L6.58 18.3603C6.99249 18.7728 7.54075 19 8.12649 19C8.70924 19 9.2575 18.7728 9.66999 18.3603L18.0115 10.0188C18.649 9.38125 19 8.53374 19 7.63226V2.87499C19 1.8415 18.1585 1 17.125 1ZM18.25 7.63226C18.25 8.33352 17.977 8.99277 17.482 9.48777L9.13976 17.83C8.6005 18.3693 7.65476 18.373 7.111 17.83L2.17 12.889C1.89926 12.619 1.74999 12.259 1.74999 11.8735C1.74999 11.491 1.89923 11.131 2.17 10.8603L10.5115 2.51875C11.008 2.02301 11.6665 1.74999 12.3677 1.74999H17.125C17.7452 1.74999 18.25 2.25473 18.25 2.87499V7.63226H18.25Z"--}}
                        {{--                                          fill="#999999" stroke="#999999" stroke-width="0.5"></path>--}}
                        {{--                                    <path d="M14.8749 3.25C13.8414 3.25 12.9999 4.0915 12.9999 5.12499C12.9999 6.15848 13.8414 6.99998 14.8749 6.99998C15.9084 6.99998 16.7499 6.15851 16.7499 5.12499C16.7499 4.0915 15.9084 3.25 14.8749 3.25ZM14.8749 6.24999C14.2546 6.24999 13.7499 5.74525 13.7499 5.12499C13.7499 4.50473 14.2546 3.99999 14.8749 3.99999C15.4952 3.99999 15.9999 4.50473 15.9999 5.12499C15.9999 5.74525 15.4951 6.24999 14.8749 6.24999Z"--}}
                        {{--                                          fill="#999999" stroke="#999999" stroke-width="0.5"></path>--}}
                        {{--                                </svg>--}}
                        {{--                                Tags:--}}
                        {{--                            </li>--}}
                        {{--                            <li class="inline-block p-[3px]">--}}
                        {{--                                <div class="font-medium text-13px md:text-sm rounded hover:bg-skin-button-secondary block border border-sink-base px-2 py-1 transition"--}}
                        {{--                                     role="button">Fresh food--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="inline-block p-[3px]">--}}
                        {{--                                <div class="font-medium text-13px md:text-sm rounded hover:bg-skin-button-secondary block border border-sink-base px-2 py-1 transition"--}}
                        {{--                                     role="button">Organic--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="inline-block p-[3px]">--}}
                        {{--                                <div class="font-medium text-13px md:text-sm rounded hover:bg-skin-button-secondary block border border-sink-base px-2 py-1 transition"--}}
                        {{--                                     role="button">Cilantro--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="inline-block p-[3px]">--}}
                        {{--                                <div class="font-medium text-13px md:text-sm rounded hover:bg-skin-button-secondary block border border-sink-base px-2 py-1 transition"--}}
                        {{--                                     role="button">Dry Food--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
                <div class="w-full xl:px-2 py-11 lg:py-14 xl:py-16 sm:px-0">
                    <div class="block border-b border-skin-base space-s-8" role="tablist" aria-orientation="horizontal">
                        <button class="relative inline-block transition-all text-15px lg:text-17px leading-5 text-skin-base focus:outline-none pb-3 lg:pb-5 hover:text-skin-primary font-semibold after:absolute after:w-full after:h-0.5 after:bottom-0 after:translate-y-[1px] after:start-0 after:bg-skin-primary"
                                id="headlessui-tabs-tab-7" role="tab" type="button" aria-selected="true" tabindex="0"
                                aria-controls="headlessui-tabs-panel-9">Detalhes
                        </button>
                        {{--                        <button class="relative inline-block transition-all text-15px lg:text-17px leading-5 text-skin-base focus:outline-none pb-3 lg:pb-5 hover:text-skin-primary"--}}
                        {{--                                id="headlessui-tabs-tab-8" role="tab" type="button" aria-selected="false" tabindex="-1">--}}
                        {{--                            Review Rating--}}
                        {{--                        </button>--}}
                    </div>
                    <div class="mt-6 lg:mt-9">
                        <div class="lg:flex" id="headlessui-tabs-panel-9" role="tabpanel"
                             aria-labelledby="headlessui-tabs-tab-7" tabindex="0">
                            <div class="text-sm sm:text-15px text-skin-muted leading-[2em] space-y-4 lg:space-y-5 xl:space-y-7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mauris nibh, congue
                                    vitae tortor eget, eleifend ornare nibh. Phasellus pharetra aliquam quam eu rhoncus.
                                    Donec bibendum, enim eget pharetra tincidunt, erat est pellentesque justo, venenatis
                                    gravida erat purus ac nibh. Maecenas vel vehicula eros. Cras ornare enim non
                                    ultrices bibendum. Duis placerat dolor non eros varius malesuada. Proin et dapibus
                                    leo, sit amet tempor ligula. Quisque lacus leo, dignissim at efficitur id, ultricies
                                    id ipsum. Ut semper enim quis euismod rutrum. Vestibulum interdum efficitur arcu in
                                    lacinia. Duis ac porta nisl. Curabitur ut libero luctus, finibus erat eu, tincidunt
                                    eros. Integer vehicula, dui finibus posuere hendrerit, felis tellus finibus eros, a
                                    vestibulum justo tellus quis lectus.</p>
                                <p>Nam porttitor heypography is the work of typesetters, compositors, typographers, graphic designers,
                                    art directors, manga artists, comic book artists, graffiti artists, and now—anyone
                                    who arranges words, letters, numbers, and symbols for publication, display, or
                                    distribution—from clerical workers and newsletter writers to anyone self-publishing
                                    materials.</p>
                                <p>Nulla massa Hit your next boxing workout with a combination it’s never seen before in the Combat
                                    Drop Arm Tank, including a freedom-instilling regular fit and dropped armhole to
                                    allow you to throw jabs and hooks at the punching bag with ease. A lightweight
                                    material keeps you fighting fit, and fresh.</p>
                                <p>Praesent imperdiet Go sporty this summer with this vintage navy and white striped v-neck t-shirt from
                                    the Abercrombie &amp; Fitch. Perfect for pairing with denim and white kicks for a
                                    stylish sporty vibe. Will fit a UK 8-10, model shown is a UK 8 and 5’5. !!</p></div>

                            <div class="flex-shrink-0 lg:w-screen-md lg:pl-10 xl:pl-14 2xl:pl-20 pt-5 lg:pt-0">
                                <h3 class="text-skin-base text-base lg:leading-7 font-medium xl:text-lg mb-4">
                                    Detalhes técnicos
                                </h3>
                                <div class="border border-skin-four rounded">
                                    <table class="w-full text-skin-base text-15px">
                                        <thead>
                                        <tr class="border-b border-skin-four">
                                            <th class="px-4 lg:px-5 xl:px-6 pt-3 pb-4 lg:pb-6 text-start text-sm lg:text-15px xl:text-base font-medium">
                                                Quantidade de<span
                                                        class="block font-semibold text-lg lg:text-xl xl:text-2xl pt-0.5">Aditivo</span>
                                            </th>
                                            <th class="border-s border-skin-four px-4 lg:px-5 xl:px-6 pt-3 pb-5 text-end w-24 lg:w-28 xl:w-36 font-semibold text-2xl lg:text-3xl xl:text-[36px]">
                                                1L
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="border-b font-normal border-skin-four last:border-b-0">
                                            <td class="px-4 lg:px-5 xl:px-6 py-3">Item 01</td>
                                            <td class="border-s border-skin-four px-4 lg:px-5 xl:px-6 py-3 text-end w-24 lg:w-28 xl:w-36">
                                                6%
                                            </td>
                                        </tr>
                                        <tr class="border-b font-normal border-skin-four last:border-b-0">
                                            <td class="px-4 lg:px-5 xl:px-6 py-3">Explosão</td>
                                            <td class="border-s border-skin-four px-4 lg:px-5 xl:px-6 py-3 text-end w-24 lg:w-28 xl:w-36">
                                                62%
                                            </td>
                                        </tr>
                                        <tr class="border-b font-normal border-skin-four last:border-b-0">
                                            <td class="px-4 lg:px-5 xl:px-6 py-3">Melhoria de torque</td>
                                            <td class="border-s border-skin-four px-4 lg:px-5 xl:px-6 py-3 text-end w-24 lg:w-28 xl:w-36">
                                                49%
                                            </td>
                                        </tr>
                                        <tr class="border-b font-normal border-skin-four last:border-b-0">
                                            <td class="px-4 lg:px-5 xl:px-6 py-3">Arrancada</td>
                                            <td class="border-s border-skin-four px-4 lg:px-5 xl:px-6 py-3 text-end w-24 lg:w-28 xl:w-36">
                                                18%
                                            </td>
                                        </tr>
                                        <tr class="border-b font-normal border-skin-four last:border-b-0">
                                            <td class="px-4 lg:px-5 xl:px-6 py-3">Economia</td>
                                            <td class="border-s border-skin-four px-4 lg:px-5 xl:px-6 py-3 text-end w-24 lg:w-28 xl:w-36">
                                                35%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="flex p-6 bg-white rounded-2xl">--}}
        {{--            <div class="flex-none w-44 relative">--}}
        {{--                <img src="https://tailwindcss.com/_next/static/media/kids-jumper.47a06f045002a3e6ba595351a36a46eb.jpg" alt="" class="absolute inset-0 w-full h-full object-cover rounded-lg" />--}}
        {{--            </div>--}}
        {{--            <form class="flex-auto pl-6">--}}
        {{--                <div class="flex flex-wrap items-baseline">--}}
        {{--                    <h1 class="w-full flex-none font-semibold mb-2.5">--}}
        {{--                        Kids Jumpsuit.--}}
        {{--                    </h1>--}}
        {{--                    <div class="text-4xl leading-7 font-bold text-purple-600">--}}
        {{--                        $39.00--}}
        {{--                    </div>--}}
        {{--                    <div class="text-sm font-medium text-gray-400 ml-3">--}}
        {{--                        In stock--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="flex items-baseline my-8">--}}
        {{--                    <div class="space-x-2 flex text-sm font-medium">--}}
        {{--                        <label>--}}
        {{--                            <input class="w-9 h-9 flex items-center justify-center rounded-full bg-purple-700 text-white" name="size" type="radio" value="xs" checked>--}}
        {{--                            XS--}}
        {{--                        </label>--}}
        {{--                        <label>--}}
        {{--                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="s">--}}
        {{--                            S--}}
        {{--                        </label>--}}
        {{--                        <label>--}}
        {{--                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="m">--}}
        {{--                            M--}}
        {{--                        </label>--}}
        {{--                        <label>--}}
        {{--                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="l">--}}
        {{--                            L--}}
        {{--                        </label>--}}
        {{--                        <label>--}}
        {{--                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="xl">--}}
        {{--                            XL--}}
        {{--                        </label>--}}
        {{--                    </div>--}}
        {{--                    <div class="ml-3 text-sm text-gray-500 underline">Size Guide</div>--}}
        {{--                </div>--}}
        {{--                <div class="flex space-x-3 mb-4 text-sm font-semibold">--}}
        {{--                    <div class="flex-auto flex space-x-3">--}}
        {{--                        <button class="w-1/2 flex items-center justify-center rounded-full bg-purple-700 text-white" type="submit">Buy now</button>--}}
        {{--                        <button class="w-1/2 flex items-center justify-center rounded-full bg-purple-50 text-purple-700" type="button">Add to bag</button>--}}
        {{--                    </div>--}}
        {{--                    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-full bg-purple-50 text-purple-700" type="button" aria-label="like">--}}
        {{--                        <svg width="20" height="20" fill="currentColor">--}}
        {{--                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />--}}
        {{--                        </svg>--}}
        {{--                    </button>--}}
        {{--                </div>--}}
        {{--                <p class="text-sm text-gray-500">--}}
        {{--                    Free shipping on all continental US orders.--}}
        {{--                </p>--}}
        {{--            </form>--}}
        {{--        </div>--}}

    </div>

@endsection
