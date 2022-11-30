@extends('portal::layouts.portal-pages')

@push('svgs')
    @component('portal::svg.logos.logo-nitrometano')@endcomponent
    @component('portal::svg.icons.line.check')@endcomponent
@endpush

@section('page_content')

    <div class="container mx-auto mb-8">
        <div class="flex items-center">
            <ol class="hero-breadcrumb font-body flex flex-wrap items-center gap-3 text-sm">
                <li class="flex items-center">
                    <a class="inline-flex items-center" href="/">
                        <svg class="w-5 h-5 outline-icon non-scaling-stroke stroke-2 mr-2" viewBox="0 0 24 24">
                            <use x="0" y="0" xlink:href="#line-home"></use>
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
                       href="{{ route($locale_prefix . '_nitrometano') }}">
                        Nitrometano
                    </a>
                </li>
            </ol>
        </div>
    </div>

    <div class="bg-white text-black">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-items-center items-center">
                <div class="p-5">
                    <img alt="MM"
                         {{-- srcset="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbundle%2F1.png&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fimages%2Fbundle%2F1.png&amp;w=384&amp;q=75 2x"--}}
                         src="{{ config('app.static_files_url') }}portal/img/produtos/nitrometano-large.webp"
                         width="750"
                         height="722"
                         decoding="async"
                         class="w-full">
                </div>
                <div class="flex-shrink-0 flex flex-col md:py-12">
                    <div class="pb-3 lg:pb-5">
                        <svg class="logo w-60 min-w-1/4 mb-6 transition-all duration-300"
                             viewBox="0 0 188 60">
                            <use x="0" y="0" class="fill-current" xlink:href="#logo-nitrometano"></use>
                        </svg>

                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold text-blue">
                            Nitrometano Puro MM Racing Fuel (1L)
                        </h2>

                        <p class="mt-4">
                            O mais alto nível de pureza do mercado brasileiro.
                        </p>

                        <p class="mt-4">
                            O <strong>Nitrometano MM Racing Fuel</strong> é uma poderosa arma na obtenção de potência em
                            motores de alta performance. Produto envasado com total cuidado e sem contato humano em todo
                            o processo, garantindo o máximo de qualidade e confiabilidade.
                        </p>
                    </div>


                    <div class="mb-4">
                        <a href="https://wa.me/5547997905515"
                           class="inline-flex items-center justify-center bg-blue hover:bg-black-light text-white text-sm text-xs font-bold rounded py-4 px-6 transition duration-500"
                           target="_blank"
                           rel="noopener noreferer">
                            <svg class="w-7 h-7 fill-current flex-shrink-0 mr-2" viewBox="0 0 24 24">
                                <use x="0" y="0" xlink:href="#icon-social-whatsapp-single"></use>
                            </svg>
                            {{ __('Compre via WhatsApp') }}
                        </a>
                    </div>
                    <small>
                        * Consulte disponibilidade de entrega para sua região.
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="pt-6 md:pt-7 pb-2">
            <div class="w-full xl:px-2 py-11 lg:py-14 xl:py-16 sm:px-0">
                <div class="block border-b border-primary pb-3">
                    <h2 class="inline-block leading-5 font-semibold">
                        Detalhes
                    </h2>
                </div>
                <div class="mt-6 lg:mt-9">
                    <div class="lg:flex">
                        <div class="">
                            <ul class="grid grid-cols-1 gap-4 text-left leading-5 mb-8">
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-blue text-black">
                                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-2"
                                             viewBox="0 0 24 24">
                                            <use x="0" y="0" xlink:href="#line-check"></use>
                                        </svg>
                                    </div>
                                    <div class="ml-4 font-medium">
                                        Embalagem virgem e homologada
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-blue text-black">
                                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-2"
                                             viewBox="0 0 24 24">
                                            <use x="0" y="0" xlink:href="#line-check"></use>
                                        </svg>
                                    </div>
                                    <div class="ml-4 font-medium">
                                        Envase automatizado
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-blue text-black">
                                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-2"
                                             viewBox="0 0 24 24">
                                            <use x="0" y="0" xlink:href="#line-check"></use>
                                        </svg>
                                    </div>
                                    <div class="ml-4 font-medium">
                                        Batoque removível
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-blue text-black">
                                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-2"
                                             viewBox="0 0 24 24">
                                            <use x="0" y="0" xlink:href="#line-check"></use>
                                        </svg>
                                    </div>
                                    <div class="ml-4 font-medium">
                                        Embalagem com lacres de segurança (frente e verso)
                                    </div>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-blue text-black">
                                        <svg class="w-4 h-4 outline-icon non-scaling-stroke stroke-2"
                                             viewBox="0 0 24 24">
                                            <use x="0" y="0" xlink:href="#line-check"></use>
                                        </svg>
                                    </div>
                                    <div class="ml-4 font-medium">
                                        Lotes testados em laboratório próprio
                                    </div>
                                </li>
                            </ul>

                            <div class="block border-b border-primary pb-3 mb-4">
                                <h3 class="inline-block leading-5 font-semibold">
                                    Importante
                                </h3>
                            </div>
                            <ul class="grid grid-cols-1 divide-y divide-gray-700 mb-12">
                                <li class="p-3">Todo e qualquer Nitrometano é um produto químico sensível à luz, calor,
                                    variações de temperatura e presença de oxigênio.
                                </li>
                                <li class="p-3">A mistura metanol/nitrometano perde a porcentagem de nitrometano com o
                                    tempo. Por esta razão, a mesma deve ser feita próxima a corrida. Isso pode ser
                                    atestado a cada mês.
                                </li>
                                <li class="p-3">Misturas de combustível com menos de 3% de nitrometano não trazem
                                    benefícios.
                                </li>
                                <li class="p-3">Variações de 2% de nitrometano não fazem diferença no desempenho.</li>
                                <li class="p-3">A proporção de nitrometano varia de acordo com a pressão atmosférica.
                                </li>
                            </ul>



                            <div class="block border-b border-primary pb-3 mb-4">
                                <h3 class="inline-block leading-5 font-semibold">
                                    Mais detalhes
                                </h3>
                            </div>
                            <p class="mt-4">
                                O nitrometano é utilizado como aditivo em carros de corrida, foguetes e aeromodelos. O
                                oxigênio contido no nitrometano permite uma queima muito menor de ar (oxigênio)
                                atmosférico em comparação com outros hidro carbonos com a gasolina.
                            </p>
                            <p class="mt-4">
                                Para queimar 1 kg de gasolina são necessários 14,6 kg de ar (oxigênio), já 1 kg de
                                nitrometano necessita apenas de 1,7 kg, uma vez que cada ciclo do motor pode conter
                                apenas uma quantidade limitada de ar, podemos queimar 8,7 vezes mais nitrometano que a
                                gasolina (a nível do mar).
                            </p>
                            <p class="mt-4">
                                Entretanto, a energia liberada pelo nitrometano é menor, enquanto a queima da gasolina
                                libera entre 42 e 44 milhões de Joules por quilo (MJ/kg), o nitrometano libera 11.3
                                MJ/kg. A
                            </p>
                            <p class="mt-4">
                                Partir destes dados, conclui-se que o nitrometano gera aproximadamente 2,3 vezes a mais
                                que a potência da gasolina quando combinado na proporção certa com o ar atmosférico.
                            </p>
                            <p class="mt-4">
                                O nitrometano (CH3NO2) é miscível em álcool, metanol, que é álcool metílico, gasolina,
                                entre outros, sendo usualmente combinado com os dois primeiros. Em geral é aplicado em
                                misturas de 5% a 10%, para motores de alta taxa de compressão ou com turbo, e de até 40%
                                para motores de baixa taxa de compressão e aspiração natural. Devido ao aumento de
                                potência, é recomendado reforço no motor para evitar redução da vida útil.
                            </p>
                            <p class="mt-4">
                                O ganho de potência com o nitrometano advém da presença de oxigênio em sua molécula,
                                causando um efeito de sobre alimentação semelhante ao do óxido nitroso (NO2). Esse
                                oxigênio é usado na queima de combustível, permitindo a injeção de maior quantidade de
                                combustível. Parte da molécula (o CH3) também é combustível e o N não participa da
                                queima, formando N2. O ganho no uso do nitrometano não é exatamente por aumento do poder
                                calorífico, mas por permitir a injeção de mais combustível para uma mesma massa de ar,
                                já que carrega parte do oxigênio para a queima em sua própria molécula.
                            </p>
                            <p class="mt-4">
                                Misturas com álcool, metanol e nitrometano atacam componentes não protegidos, como bicos
                                injetores e outras peças sujeitas a corrosão. Isso acontece em grande parte por estes
                                combustíveis conterem oxigênio em suas moléculas. Álcool e metanol, por sua vez,
                                aumentam o índice antidetonante (IAD), que indica a tendência à detonação do
                                combustível, na direta proporção da mistura. A gasolina a eles misturada ganha
                                octanagem.
                            </p>
                            <p class="mt-4">
                                Os componentes do motor e sua regulagem devem ser ajustados para o uso da nova mistura
                                quando esta estiver sendo usada.
                            </p>
                        </div>

                        <div class="flex-shrink-0 lg:w-screen-md lg:pl-10 xl:pl-14 2xl:pl-20 pt-5 lg:pt-0 hidden">
                            <h3 class="text-skin-base text-base lg:leading-7 font-medium xl:text-lg mb-4">
                                Detalhes técnicos
                            </h3>
                            <div class="border border-skin-four rounded">
                                <table class="w-full text-skin-base text-15px">
                                    <thead>
                                    <tr class="border-b border-skin-four">
                                        <th class="px-4 lg:px-5 xl:px-6 pt-3 pb-4 lg:pb-6 text-start text-sm lg:text-15px xl:text-base font-medium">
                                            Quantidade<span
                                                    class="block font-semibold text-lg lg:text-xl xl:text-2xl pt-0.5">Nitrometano</span>
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
