@extends('portal::layouts.portal-pages')

@push('svgs')
    @component('portal::svg.icons.line.mail')@endcomponent
@endpush

@section('page_content')
    <section class="py-20 bg-white bg-img-blue-1">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold font-serif mb-2">
                {{ __('Comprar tilápia da Alpha Fish') }}
            </h2>
            <p class="">
                {{ __('Entenda como é simples.') }}
            </p>

            @component('portal::components.breadcrumb')
                <a href="{{ route($locale_prefix . '_comprar') }}"
                    class="inline-flex items-center p-2 text-blue hover:opacity-50 transition-all">
                    Comprar Tilápia
                </a>
            @endcomponent
        </div>
    </section>

    <section class="bg-white pb-32">
        <div class="container mx-auto lg:max-w-screen-sm">
            Conteúdo
        </div>
    </section>
@endsection
