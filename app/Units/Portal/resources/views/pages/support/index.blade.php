@extends('portal::layouts.portal-pages')

@push('svgs')
    @component('portal::svg.icons.line.mail')@endcomponent
@endpush

@section('page_content')
    <section class="py-20 bg-white bg-img-blue-1">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold font-serif mb-2">
                {{ __('Entre em contato com a Alpha Fish') }}
            </h2>
            <p class="">
                {{ __('É um grande prazer atender você.') }}
            </p>

            @component('portal::components.breadcrumb')
                <a href="{{ route($locale_prefix . '_support') }}"
                    class="inline-flex items-center p-2 text-blue hover:opacity-50 transition-all">
                    Atendimento
                </a>
            @endcomponent
        </div>
    </section>

    <section class="bg-white pb-32">
        <div class="container mx-auto lg:max-w-screen-sm">
            @livewire('support')
        </div>
    </section>
@endsection
