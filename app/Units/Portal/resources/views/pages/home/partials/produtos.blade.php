<section class="py-20 lg:py-32 bg-black">

    <div class="container mx-auto">
        <div class="section-title relative flex flex-wrap items-center justify-between border-b border-black-light pb-6 mb-8 lg:mb-14">
            <div>
                <h3 class="font-bold text-2xl lg:text-4xl">{{ __('Nossos produtos') }}</h3>
                <span class="w-20 h-1.5	absolute -bottom-1 bg-gradient-to-r from-primary to-primary-dark rounded-full"></span>
            </div>
            <a href="{{ route($locale_prefix . '_list') }}"
               class="bg-blue hover:bg-black-light text-white text-sm text-xs font-bold rounded py-4 px-6 transition duration-500">
                {{ __('Ver todos os produtos') }}
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="{{ route($locale_prefix . '_details') }}">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        {{--                            <div class="flex items-center gap-1 line-through text-black-light">--}}
                        {{--                                <small>R$</small>--}}
                        {{--                                126--}}
                        {{--                                <small>,89</small>--}}
                        {{--                            </div>--}}
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        {{--                            <div class="flex items-center gap-1 line-through text-black-light">--}}
                        {{--                                <small>R$</small>--}}
                        {{--                                126--}}
                        {{--                                <small>,89</small>--}}
                        {{--                            </div>--}}
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="product-box relative flex justify-between flex-col aos-init aos-animate" data-aos="fade-up">
                <a class="bg-black-lightest hover:bg-blue flex items-center justify-center absolute -right-3 -top-3 rounded-full w-8 h-8 z-50 transition"
                   href="/">
                    <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-1" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#line-heart"></use>
                    </svg>
                </a>
                <a class="text-black hover:text-white bg-white hover:bg-black border-2 border-transparent hover:border-primary p-6 shadow-lg rounded hover:shadow-xl transition duration-300"
                   href="/">
                    <div class="product-top pb-2">
                        <div class="product-image relative rounded overflow-hidden mb-6">
                            <img class="w-full sm:h-56 rounded object-cover" src="https://html-tokenmart.netlify.app/light/assets/images/product/16.jpg" alt="title">
                        </div>
                        <div class="product-content">
                            <h3 class="text-lg font-bold text-center leading-none">
                                Nome deste produto
                            </h3>
                        </div>
                    </div>
                    <div class="product-bottom flex items-center flex-wrap justify-center gap-2">
                        <div class="flex items-center gap-1 text-2xl font-bold text-blue">
                            <small class="text-sm">R$</small>
                            89
                            <small class="text-sm">,00</small>
                        </div>
                        <div class="flex items-center gap-1 line-through text-black-light">
                            <small>R$</small>
                            126
                            <small>,89</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>