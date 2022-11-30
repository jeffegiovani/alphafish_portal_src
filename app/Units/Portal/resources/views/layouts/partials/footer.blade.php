
<footer class="bg-black text-white py-28">
    <div class="container mx-auto relative px-4 z-10">
        <div class="flex flex-wrap justify-between gap-10 md:gap-2 items-center lg:flex-row">
            <div class="w-full md:max-w-sm">
                <a href="{{ route($locale_prefix . '_home') }}"
                    class="block mb-4"
                    title="Alpha Fish">
                    <span class="sr-only">{!! __('Alpha Fish') !!}</span>
                    <svg class="logo min-w-sm w-24 text-white"
                            viewBox="0 0 88 56">
                        <use x="0" y="0" xlink:href="#logo-alphafish-no-color"></use>
                    </svg>
                </a>
                <div class="text-sm">
                    <p class="mb-4">
                        Aqui é importante ter um texto bem abrangente sobre o neócio, pois vai aparecer em todas as páginas e é importante para posicionamento no Google.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra nulla sed volutpat blandit. Nunc sit amet.
                    </p>
                </div>
            </div>

            <div class="w-full md:max-w-xs">
                <div class="bg-blue text-white p-6 rounded md:-mt-40">
                    <a href="#" class="flex flex-row flex-wrap text-white">
                        <svg class="flex text-white mr-2 h-10 w-10 transform transition"
                                viewBox="0 0 20 20">
                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                        </svg>
                        <span class="flex flex-col">
                            <small class="font-serif text-xs">Fale Conosco</small>
                            <span>
                                <small class="font-serif text-xs">+55 46</small> <strong>9 9915 0079</strong>
                            </span>
                        </span>
                    </a>

                    <div>
                        &nbsp;
                    </div>

                    <a href="#" class="flex flex-row flex-wrap text-white">
                        <svg class="flex text-white mr-2 h-10 w-10 transform transition"
                                viewBox="0 0 20 20">
                            <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                        </svg>
                        <span class="flex flex-col">
                            <small class="font-serif text-xs">Encontre-nos</small>
                            <span>
                                <strong>Av. Nilo Peçanha, 285</strong><br>
                                Dr. Antônio Paranhos<br>
                                São Jorge D’Oeste/PR
                            </span>
                        </span>
                    </a>
                    
                    <div class="mb-10">
                        &nbsp;
                    </div>

                    <div class="flex items-center justify-center gap-1 w-full">
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="Alpha Fish">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-instagram"></use>
                            </svg>
                        </a>
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="Alpha Fish">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-facebook"></use>
                            </svg>
                        </a>
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="Alpha Fish">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-youtube"></use>
                            </svg>
                        </a>
                        <a class="flex items-center justify-center text-white hover:text-blue w-10 h-10 bg-transparent rounded-full border border-white hover:border-primary transition duration-300"
                           href="#"
                           title="Alpha Fish">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <use x="0" y="0" xlink:href="#icon-social-linkedin"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full md:max-w-xs">
                <nav>
                    <ul class="flex flex-col gap-2">
                        <li>
                            <a href="{{ route($locale_prefix . '_home') }}" 
                            class="flex items-center text-white hover:text-blue transition">
                                <svg class="mr-2 h-5 w-5 transition"
                                    viewBox="0 0 20 20">
                                    <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                </svg>
                                Início
                            </a>
                        </li>
                        <li>
                            <a href="{{ route($locale_prefix . '_home') }}" 
                            class="flex items-center text-white hover:text-blue transition">
                                <svg class="mr-2 h-5 w-5 transition"
                                    viewBox="0 0 20 20">
                                    <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                </svg>
                                Cadeia Produtiva
                            </a>
                        </li>
                        <li>
                            <a href="{{ route($locale_prefix . '_comprar') }}" 
                            class="flex items-center text-white hover:text-blue transition">
                                <svg class="mr-2 h-5 w-5 transition"
                                    viewBox="0 0 20 20">
                                    <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                </svg>
                                Como Comprar
                            </a>
                        </li>
                        <li>
                            <a href="{{ route($locale_prefix . '_home') }}" 
                            class="flex items-center text-white hover:text-blue transition">
                                <svg class="mr-2 h-5 w-5 transition"
                                    viewBox="0 0 20 20">
                                    <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                </svg>
                                A Tilápia
                            </a>
                        </li>
                        <li>
                            <a href="{{ route($locale_prefix . '_instituccional') }}" 
                            class="flex items-center text-white hover:text-blue transition">
                                <svg class="mr-2 h-5 w-5 transition"
                                    viewBox="0 0 20 20">
                                    <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                </svg>
                                A Alpha Fish
                            </a>
                        </li>
                        <li>
                            <a href="{{ route($locale_prefix . '_support') }}" 
                            class="flex items-center text-white hover:text-blue transition">
                                <svg class="mr-2 h-5 w-5 transition"
                                    viewBox="0 0 20 20">
                                    <use x="0" y="0" class="fill-current" xlink:href="#line-home"></use>
                                </svg>
                                Atendimento
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="bg-black-light h-px my-20"></div>

        <div class="text-center text-xs">
            Alpha Fish 2020-{{ date('Y') }}  |  Todos os direitos reservados
        </div>
    </div>
</footer>
