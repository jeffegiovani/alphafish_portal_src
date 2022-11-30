
<div>
    <div class="flex flex-wrap -mx-3 text-center">
        <div class="w-full lg:w-1/3 px-3 mb-12 ">
            <svg class="mb-6 h-8 w-8 mx-auto text-orange stroke-2"
                viewBox="0 0 20 20">
                <use x="0" y="0" class="fill-current" xlink:href="#line-phone"></use>
            </svg>
            <div class="leading-relaxed">
                <span class="text-xs tracking-widest uppercase text-orange">Liga pra gente</span>
                <p>+55 46 9 9915 0079</p>
                <p>+55 46 3536 3536</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 px-3 mb-12">
            <svg class="mb-6 h-8 w-8 mx-auto text-orange stroke-2"
                viewBox="0 0 20 20">
                <use x="0" y="0" class="fill-current" xlink:href="#line-mail"></use>
            </svg>
            <div class="leading-relaxed">
                <span class="text-xs tracking-widest uppercase text-orange">Envie e-mail</span>
                <p>email@alphafish.com.br</p>
                <p>sac@alphafish.com.br</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 px-3 mb-12">
            <svg class="mb-6 h-8 w-8 mx-auto text-orange stroke-2"
                viewBox="0 0 20 20">
                <use x="0" y="0" class="fill-current" xlink:href="#line-pin"></use>
            </svg>
            <div class="leading-relaxed">
                <span class="text-xs tracking-widest uppercase text-orange">Faça uma visita</span>
                <p>Av. Nilo Peçanha, 285</p>
                <p>Dr. Antônio Paranhos</p>
                <p>São Jorge D’Oeste/PR</p>
            </div>
        </div>
    </div>

    <div class="text-center mb-8">
        <p class="mb-1">
            Estamos aqui para lhe atender com muito carinho!
        </p>
        <p>
            Seu contato é muito importante para nós, por isso queremos ouvir o que você tem para dizer.
        </p>
    </div>

    @if($formSended)
        <div class="text-center">
            <h6 class="text-xl font-bold mb-4">
                Seu contato foi enviado, obrigado por falar conosco.
            </h6>
        </div>
    @else
        <form action="#" 
            class="flex flex-wrap justify-end"
                wire:loading.class="opacity-25"
                wire:target="submitForm"
                wire:submit.prevent="submitForm()">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full mb-4">
                <div class="grid grid-cols-1 gap-4">
                    <div class="z-0 w-full floating-label group">
                        <input type="text"
                            name="name"
                            id="name"
                            wire:model.defer="name"
                            placeholder=" "
                            maxlength="70"
                            class="block w-full transition duration-300 bg-gray-100 border-2 border-transparent rounded-md focus:border-gray-200 focus:ring-0"
                        />
                        <label for="name"
                            class="absolute px-3 ml-1 text-gray-600 duration-300 rounded-full top-3 origin-0">
                            Seu nome completo
                        </label>
                        @error('name')
                            <small class="px-4 text-sm bg-red-100 text-red-700 rounded">{{  $message }}</small>
                        @enderror
                    </div>
                    
        
                    <div class="z-0 w-full floating-label group">
                        <input
                            type="tel"
                            name="fone"
                            id="fone"
                            wire:model.defer="fone"
                            maxlength="20"
                            placeholder=" "
                            inputmode="numeric"
                            class="block w-full transition duration-300 bg-gray-100 border-2 border-transparent rounded-md focus:border-gray-200 focus:ring-0"
                        />
                        <label for="fone"
                            class="absolute px-3 ml-1 text-gray-600 duration-300 rounded-full top-3 origin-0">
                            Seu fone (com DDD, somente números)
                        </label>
                        @error('fone')
                            <small class="px-4 text-sm bg-red-100 text-red-700 rounded">{{  $message }}</small>
                        @enderror
                    </div>
                    
        
                    <div class="z-0 w-full floating-label group">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            wire:model.defer="email"
                            maxlength="20"
                            placeholder=" "
                            inputmode="numeric"
                            class="block w-full transition duration-300 bg-gray-100 border-2 border-transparent rounded-md focus:border-gray-200 focus:ring-0"
                        />
                        <label for="email"
                            class="absolute px-3 ml-1 text-gray-600 duration-300 rounded-full top-3 origin-0">
                            E-mail
                        </label>
                        @error('email')
                            <small class="px-4 text-sm bg-red-100 text-red-700 rounded">{{  $message }}</small>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="floating-label z-0 w-full group">
                        <textarea
                                name="message"
                                id="message"
                                placeholder=" "
                                wire:model.defer="message"
                                rows="6"
                                class="block w-full rounded-md bg-gray-100 border-2 border-transparent focus:border-gray-200 focus:bg-white focus:ring-0 transition duration-300">
                        </textarea>
                        <label for="message"
                               class="absolute rounded-full duration-300 top-3 origin-0 text-gray-600 ml-1 px-3 group-focus:bg-white">
                            Mensagem
                        </label>

                        @error('message')
                            <small class="px-4 text-sm bg-red-100 text-red-700 rounded">{{  $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>


            <button type="submit"
                class="inline-flex px-5 py-2 text-orange hover:text-white bg-gold-500 hover:bg-orange border border-orange rounded-md transition-all duration-500 hover:tracking-wider"
                name="open"
                wire:loading.attr="disabled">
                <span class="w-5 h-5 mr-3" wire:loading wire:target="submitForm">
                    <svg class="w-5 h-5 text-white animate-spin" viewBox="0 0 24 24">
                        <use x="0" y="0" xlink:href="#solid-spin"></use>
                    </svg>
                </span>
                <strong>
                    Enviar
                </strong>
            </button>

            <input type="text" 
                name="sobrenome" 
                id="sobrenome"
                wire:model.defer="sobrenome" 
                placeholder=" " 
                maxlength="70"
                class="hidden">

            <input type="hidden" 
                name="route" 
                wire:model.defer="{{ request()->url() }}" >
        </form>
    @endif
</div>
