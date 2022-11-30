{{--{{ dd(readfile(public_path(mix('/static-files/portal/css/portal.css')))) }}--}}
{{--<link rel="stylesheet" href="{{ mix('/static-files/portal/css/portal.css') }}">--}}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" 
        href="https://fonts.googleapis.com/css2?family=Domine:wght@700&family=Heebo:wght@400;600;800&display=swap" 
        as="style" 
        onload="this.onload=null;this.rel='stylesheet'">

<link rel="stylesheet" href="{{ mix('/static-files/portal/css/portal.css') }}">
<style>
    {{-- !! str_replace('@charset "UTF-8";', '', file_get_contents(public_path('/static-files/portal/css/portal.css'))) !! --}}
    {{--    @php str_replace('@charset "UTF-8";', '', readfile(public_path('/static-files/portal/css/portal.css'))) @endphp --}}
</style>

@livewireStyles