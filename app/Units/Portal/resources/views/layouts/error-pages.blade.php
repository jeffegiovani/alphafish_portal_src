@extends('portal::layouts.default-markup')


@push('svgs')
    @component('portal::svg.logos.logo-alpafish')@endcomponent

    @component('portal::svg.icons.social.facebook')@endcomponent
    @component('portal::svg.icons.social.instagram')@endcomponent
    @component('portal::svg.icons.social.youtube')@endcomponent
    @component('portal::svg.icons.social.linkedin')@endcomponent
    @component('portal::svg.icons.social.whatsapp')@endcomponent
    @component('portal::svg.icons.social.whatsapp-single')@endcomponent
@endpush

@push('styles')
    @include('portal::layouts.partials.styles')
@endpush

@push('scripts')
    @include('portal::layouts.partials.scripts')
@endpush

@section('body_content')
    <main class="h-full flex flex-wrap content-center min-h-screen">
        @yield('page_content')
    </main>
@endsection
