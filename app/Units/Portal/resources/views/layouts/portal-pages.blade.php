@extends('portal::layouts.default-markup')

@push('styles')
    @include('portal::layouts.partials.styles')
@endpush

@push('scripts')
    @include('portal::layouts.partials.scripts')
@endpush

@push('svgs')
    @component('portal::svg.logos.logo-alpafish')@endcomponent
    @component('portal::svg.logos.logo-alpafish-no-color')@endcomponent

    @component('portal::svg.icons.line.home')@endcomponent
    @component('portal::svg.icons.line.menu')@endcomponent
    @component('portal::svg.icons.line.x')@endcomponent
    @component('portal::svg.icons.line.phone')@endcomponent
    @component('portal::svg.icons.line.pin')@endcomponent
    @component('portal::svg.icons.line.search-circle')@endcomponent
    @component('portal::svg.icons.line.heart')@endcomponent
    @component('portal::svg.icons.line.right-arrow')@endcomponent
    @component('portal::svg.icons.line.globe')@endcomponent

    @component('portal::svg.icons.solid.chevron-down')@endcomponent

    @component('portal::svg.icons.social.facebook')@endcomponent
    @component('portal::svg.icons.social.instagram')@endcomponent
    @component('portal::svg.icons.social.youtube')@endcomponent
    @component('portal::svg.icons.social.linkedin')@endcomponent
    @component('portal::svg.icons.social.whatsapp')@endcomponent
    @component('portal::svg.icons.social.whatsapp-single')@endcomponent
@endpush

@section('body_content')
    @include('portal::layouts.partials.header')

    <main class="pt-20">
        @yield('page_content')
    </main>

    @include('portal::layouts.partials.footer')


    <div class="fixed right-6 bottom-6 z-75 grid gap-4">

{{--        <a href="#" class="footer-back inline-flex items-center p-3 bg-black-light rounded-full">--}}
{{--            <svg class="w-5 h-5" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <path d="M1 9L9 1L17 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--            </svg>--}}
{{--        </a>--}}

        <a href="https://wa.me/5546999999999"
           target="_blank"
           title="Atendimento via WhatsApp"
           rel="noopener noreferrer"
           class="inline-flex p-3 text-sm text-white hover:text-wpp-color bg-wpp-color hover:bg-white rounded-full transition-all duration-300 items-center shadow-md">
            <svg class="w-7 h-7 fill-current flex-shrink-0" viewBox="0 0 24 24">
                <use x="0" y="0" xlink:href="#icon-social-whatsapp-single"></use>
            </svg>
        </a>
    </div>
@endsection
