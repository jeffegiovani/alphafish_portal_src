@extends('portal::layouts.portal-pages')

@section('page_content')

    <div class="container sm:w-11/12 mx-auto">

        <form action="#"
              method="post"
              class="grid grid-cols-1 gap-4 md:gap-5 lg:w-11/12"
              x-bind:class="{'opacity-25': loading}"
              @submit.prevent="submitForm()">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5 items-center">
                <div class="floating-label z-0 w-full group">
                    <input
                            type="text"
                            name="nome"
                            id="nome"
                            placeholder=" "
                            maxlength="70"
                            x-model="formData.name"
                            class="block w-full rounded-md bg-gray-100 border-2 border-transparent focus:border-gray-200 focus:bg-white focus:ring-0 transition duration-300"
                    />
                    <label for="nome"
                           class="absolute rounded-full duration-300 top-3 origin-0 text-gray-500 ml-1 px-3 group-focus:bg-white">
                        Seu nome
                    </label>
                    <template x-if="errors.name">
                        <div class="text-red-600 px-4 text-sm" x-html="errors.name[0]"></div>
                    </template>
                </div>
                <div class="floating-label z-0 w-full group">
                    <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder=" "
                            maxlength="70"
                            x-model="formData.email"
                            class="block w-full rounded-md bg-gray-100 border-2 border-transparent focus:border-gray-200 focus:bg-white focus:ring-0 transition duration-300"
                    />
                    <label for="email"
                           class="absolute rounded-full duration-300 top-3 origin-0 text-gray-500 ml-1 px-3 group-focus:bg-white">
                        Seu melhor email
                    </label>
                    <template x-if="errors.email">
                        <div class="text-red-600 px-4 text-sm" x-html="errors.email[0]"></div>
                    </template>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-5 items-center">
                <div class="floating-label z-0 w-full group">
                    <input
                            type="tel"
                            name="phone"
                            id="phone"
                            maxlength="20"
                            placeholder=" "
                            inputmode="numeric"
                            x-model="formData.phone"
                            x-on:input.debounce.50ms="formatPhone()"
                            class="block w-full rounded-md bg-gray-100 border-2 border-transparent focus:border-gray-200 focus:bg-white focus:ring-0 transition duration-300"
                    />
                    <label for="phone"
                           class="absolute rounded-full duration-300 top-3 origin-0 text-gray-500 ml-1 px-3 group-focus:bg-white">
                        (DDD)+Fone
                    </label>
                    <template x-if="errors.phone">
                        <div class="text-red-600 px-4 text-sm" x-html="errors.phone[0]"></div>
                    </template>
                </div>
                <div class=" z-0 w-full group flex flex-wrap justify-items-stretch">
                    <label class="mr-4 cursor-pointer">
                        <input type="radio"
                               name="is_customer"
                               x-model="formData.is_customer"
                               value="0"
                               class="rounded-full bg-gray-200 border-transparent focus:border-transparent focus:bg-gray-200 text-gray-700 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500 transition duration-300">
                        Ainda não sou cliente
                    </label>
                    <label class="cursor-pointer">
                        <input type="radio"
                               name="is_customer"
                               x-model="formData.is_customer"
                               value="1"
                               class="rounded-full bg-gray-200 border-transparent focus:border-transparent focus:bg-gray-200 text-gray-700 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500 transition duration-300">
                        Sou cliente
                    </label>
                    <template x-if="errors.is_customer">
                        <div class="flex w-full text-red-600 px-4 text-sm"
                             x-html="errors.is_customer[0]"></div>
                    </template>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 md:gap-5 items-center">
                <div class="floating-label z-0 w-full group">
                                    <textarea
                                            name="message"
                                            id="message"
                                            placeholder=" "
                                            x-model="formData.message"
                                            rows="6"
                                            class="block w-full rounded-md bg-gray-100 border-2 border-transparent focus:border-gray-200 focus:bg-white focus:ring-0 transition duration-300">
                                    </textarea>
                    <label for="message"
                           class="absolute rounded-full duration-300 top-3 origin-0 text-gray-500 ml-1 px-3 group-focus:bg-white">
                        Mensagem
                    </label>

                    <template x-if="errors.message">
                        <div class="text-red-600 px-4 text-sm" x-html="errors.message[0]"></div>
                    </template>
                </div>
            </div>

            <div class="pt-8">
                <button type="submit"
                        class="inline-flex items-center mx-auto text-white bg-blue-600 border-0 py-2 px-8 focus:outline-none hover:bg-blue-900 rounded-full text-lg transition duration-300"
                        name="open">
                                    <span class="w-5 h-full mr-3" x-show="loading">
                                        <svg class="animate-spin h-5 w-5 text-white" viewBox="0 0 24 24">
                                            <use x="0" y="0" xlink:href="#solid-spin"></use>
                                        </svg>
                                    </span>
                    <span>
                                        Enviar contato
                                    </span>
                </button>
            </div>
        </form>

        <div class="flex p-6 bg-white rounded-2xl">
            <div class="flex-none w-44 relative">
                <img src="https://tailwindcss.com/_next/static/media/kids-jumper.47a06f045002a3e6ba595351a36a46eb.jpg" alt="" class="absolute inset-0 w-full h-full object-cover rounded-lg" />
            </div>
            <form class="flex-auto pl-6">
                <div class="flex flex-wrap items-baseline">
                    <h1 class="w-full flex-none font-semibold mb-2.5">
                        Kids Jumpsuitttt 2222.
                    </h1>
                    <div class="text-4xl leading-7 font-bold text-purple-600">
                        $39.00
                    </div>
                    <div class="text-sm font-medium text-gray-400 ml-3">
                        In stock
                    </div>
                </div>
                <div class="flex items-baseline my-8">
                    <div class="space-x-2 flex text-sm font-medium">
                        <label>
                            <input class="w-9 h-9 flex items-center justify-center rounded-full bg-purple-700 text-white" name="size" type="radio" value="xs" checked>
                            XS
                        </label>
                        <label>
                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="s">
                            S
                        </label>
                        <label>
                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="m">
                            M
                        </label>
                        <label>
                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="l">
                            L
                        </label>
                        <label>
                            <input class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-gray-200" name="size" type="radio" value="xl">
                            XL
                        </label>
                    </div>
                    <div class="ml-3 text-sm text-gray-500 underline">Size Guide</div>
                </div>
                <div class="flex space-x-3 mb-4 text-sm font-semibold">
                    <div class="flex-auto flex space-x-3">
                        <button class="w-1/2 flex items-center justify-center rounded-full bg-purple-700 text-white" type="submit">Buy now</button>
                        <button class="w-1/2 flex items-center justify-center rounded-full bg-purple-50 text-purple-700" type="button">Add to bag</button>
                    </div>
                    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-full bg-purple-50 text-purple-700" type="button" aria-label="like">
                        <svg width="20" height="20" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                        </svg>
                    </button>
                </div>
                <p class="text-sm text-gray-500">
                    Free shipping on all continental US orders.
                </p>
            </form>
        </div>

        <div class="my-20">
            <div class="rounded-xl overflow-hidden bg-gradient-to-r from-purple-100 to-white p-10">
                <form class="flex w-full max-w-sm mx-auto space-x-3">
                    <input class="flex-1 appearance-none border border-transparent w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-md rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="email" placeholder="Your email">
                    <button class="flex-shrink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="button">
                        Sign up
                    </button>
                </form>
            </div>
        </div>


        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Applicant Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Personal details and application.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Margot Foster
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Application for
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Backend Developer
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            margotfoster@example.com
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Salary expectation
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            $120,000
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            About
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Attachments
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate">
                  resume_back_end_developer.pdf
                </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Download
                                        </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate">
                  coverletter_back_end_developer.pdf
                </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            Download
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

    </div>


@endsection
