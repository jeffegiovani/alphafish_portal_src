
<footer class="overflow-hidden">
    <div class="relative py-20 lg:py-32">
        <div class="absolute inset-0 md:left-1/4 bg-black-light opacity-25">

        </div>
        <div class="container mx-auto relative px-4 z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-8">
                <div class="footer-widget xl:flex xl:flex-col xl:justify-center xl:col-span-2">
                    <a href="{{ route($locale_prefix . '_home') }}"
                     class="mb-10 block">
                        <span class="sr-only">{!! __('MM Racing') !!}</span>
                        <svg class="logo w-40 lg:w-48 min-w-1/4 text-white fill-current transition-all duration-300"
                             viewBox="0 0 88 56">
                            <use x="0" y="0" class="fill-current" xlink:href="#logo-mm-fuel"></use>
                        </svg>
                    </a>
                    <div class="flex items-center gap-1">
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="MM">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-instagram"></use>
                            </svg>
                        </a>
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="MM">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-facebook"></use>
                            </svg>
                        </a>
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="MM">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-youtube"></use>
                            </svg>
                        </a>
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="MM">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-linkedin"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer-widget pb-4 lg:pb-0 lg:border-b-0 border-b border-indigo-200">
                    <h4 class="text-blue font-display text-xl font-semibold">Produtos</h4>
                    <ul class="mt-4 xl:mt-10 flex flex-wrap xl:block">
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="{{ route($locale_prefix . '_nitrometano') }}">
                                Nitrometano
                            </a>
                        </li>
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="{{ route($locale_prefix . '_metanol') }}">
                                Metanol
                            </a>
                        </li>
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="{{ route($locale_prefix . '_m5') }}">
                                M5 Faster Combustion
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget pb-4 lg:pb-0 lg:border-b-0 border-b border-indigo-200">
                    <h4 class="text-blue font-display text-xl font-semibold">Conteúdo</h4>
                    <ul class="mt-4 xl:mt-10 flex flex-wrap xl:block">
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="{{ route($locale_prefix . '_home') }}">
                                Início
                            </a>
                        </li>
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="/">
                                Parceiros
                            </a>
                        </li>
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="/">
                                Privacidade
                            </a>
                        </li>
                        <li class="mb-4 mr-4">
                            <a class="font-body text-white transition duration-300 hover:text-blue underline-hover"
                               href="https://wa.me/5547997905515"
                               target="_blank"
                               rel="noopener noreferrer">
                                Atendimento
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget col-span-1 md:col-span-2">
                    <h4 class="text-blue font-display text-xl font-semibold">Receba nossas ofertas por email</h4>
                    <form class="flex items-center w-full mb-4 mt-4 xl:mt-10">
                        <input class="bg-transparent border-2 border-r-0 border-primary transition duration-500 focus:outline-none hover:bg-white rounded-l w-full h-14 p-4"
                               type="email"
                               placeholder="Seu e-mail">
                        <button class="flex items-center bg-gradient-to-r from-primary to-primary-dark rounded-r h-14 py-4 px-8 transition-all duration-500 hover:from-primary-dark hover:to-primary" type="submit">
                            <img class="w-6 h-6" src="https://html-tokenmart.netlify.app/light/assets/images/newsletter-icon.svg" alt="title">
                        </button>
                    </form>
                    <p class="text-xs text-white mb-10">Sua privacidade está garantida.</p>

                    <div class="flex items-start group relative">
                        <button class="flex w-full items-center whitespace-nowrap font-medium text-white p-2 rounded-t-md bg-black group-hover:bg-blue focus:outline-none transition duration-500">
                            <svg class="w-8 h-8 outline-icon non-scaling-stroke stroke-2 mr-2" viewBox="0 0 24 24">
                                <use x="0" y="0" xlink:href="#line-globe"></use>
                            </svg>
                            Escolha sua localização
                        </button>
                        <div class="absolute z-10 flex-col items-start invisible group-hover:visible w-full bg-white shadow-lg top-full right-0 rounded-b-md overflow-hidden group-hover:flex opacity-0 group-hover:opacity-100 transform scale-90 group-hover:scale-100 transition duration-300">
                            <a class="w-full px-4 py-2 text-left text-gray-500 hover:bg-gray-300" href="{{ route('pt_home') }}">Português</a>
                            <a class="w-full px-4 py-2 text-left text-gray-500 hover:bg-gray-300" href="{{ route('en_home') }}">English</a>
                            <a class="w-full px-4 py-2 text-left text-gray-500 hover:bg-gray-300" href="{{ route('es_home') }}">Español</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 lg:text-center py-10 xl:py-20 mb-20">
        <p class="font-body text-sm text-white">© <span id="spanYear">2021</span> MM Factory Racing - All Rights Reserved <br>
            <small>by <a href="https://higgi.digital/" class="text-blue underline-hover" rel="noopener" target="_blank">Higgi Digital</a></small>
        </p>
    </div>
</footer>
