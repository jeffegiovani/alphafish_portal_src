@extends('portal::layouts.error-pages')

@section('page_content')
    <div class="w-full max-w-md mx-auto text-center">
        <a href="{{ route($locale_prefix . '_home') }}"
            class="max-w-xs p-5 flex m-auto rounded-md">
            <svg class="logo text-white"
                viewBox="0 0 88 56">
                <use x="0" y="0" xlink:href="#logo-alphafish"></use>
            </svg>
        </a>
        
        <h1 class="text-4xl">Página não encontrada</h1>
        <p class="mb-8 text-gray-400">O link que você está tentando acessar pode estar incorreto ou pode ter sido removido.</p>

        <a href="/"
        data-turbolinks="false"
        class="inline-flex px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue hover:bg-blue-dark md:py-4 md:text-lg md:px-10 transition">
            Voltar ao início
        </a>

    </div>
@endsection
