<x-app-layout>

    <x-slot name="pagename">Sobre</x-slot>

    <x-slot name="header">
        <h1 class="text-2xl">Sobre nós</h1>
    </x-slot>

    <div class="py-12 bg-grey">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex items-center justify-center flex-shrink-0">
                <div class=" w-40 h-40 rounded-full">
                    <x-application-logo></x-application-logo>
                </div>

            </div>


            <div class="overflow-hidden border bg-white sm:rounded-lg mt-5">
                <div class="p-6 text-black flex flex-wrap">

                    <section class="flex flex-col">
                        <section class="grid md:grid-cols-2 sm:grid-cols-1 gap-4 gap-y-10">

                            <div>
                                <h1 class="text-4xl align-middle inline-block mb-4">Venha conhecer mais sobre nossa
                                    equipe!</h1>
                            </div>

                            <div>
                                <h1 class="text-2xl text-right mb-4">Quem somos?</h1>
                                <p class="text-justify">
                                    Somos uma empresa focada no ramo da informática, ofecemos diversos tipos de
                                    serviços,
                                    tanto na manuntenção ou ate na montagem de seu computador. Atuamos há mais de 10
                                    anos no
                                    mercado. Nosso estoque tem uma variedade de produto do LowEnd ate o HighEnd.
                                </p>
                            </div>

                            <div>
                                <h1 class="text-2xl text-left mb-4">Serviços</h1>
                                <p class="text-justify">

                                <dl class="max-w-md text-gray-900 divide-y divide-gray-200 px-4">
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg">Mantunção de computadores</dt>

                                    </div>
                                    <div class="flex flex-col py-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg">Montagem e melhorias de hardwares</dt>

                                    </div>
                                    <div class="flex flex-col pt-3">
                                        <dt class="mb-1 text-gray-500 md:text-lg">Ajuda na montagem perfeita</dt>

                                    </div>
                                </dl>

                                </p>
                            </div>
                            <div>
                                <img src="{{ asset('img/profissional.jpg') }}" class="md:w-lg  rounded-lg shadow-lg"
                                    alt="">
                            </div>
                        </section>

                        <section class="mt-10">
                            <h1 class="text-2xl mb-5">Venha nós conhecer pessoalmente! Ficaremos feliz com sua visita.</h1>
                            <iframe class="w-full h-[500px]" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=pt_br&amp;q=Pra%C3%A7a%20Bernardino%20de%20Lima,%2080%20-%20Centro,%20Nova%20Lima%20-%20MG,%2034000-970+(Boom%20Tech)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                    href="https://www.gps.ie/">gps devices</a></iframe>
                        </section>
                    </section>

                    {{-- <section class="grid grid-cols-2">
                        <section class="flex ">
                            <img class="block h-40 w-auto fill-current text-gray-800 " src="{{ asset('img/logo.png') }}"
                                alt="logo">
                            <span class="inline-block align-middle p-4 flex justify-center">
                                <span class="text-black text-2xl">Venha conhecer mais sobre nossa equipe!</span>
                            </span>
                        </section>
                        <section class="flex flex-wrap">
                            <h1 class=" w-full text-right font-semibold text-2xl">Quem Somos?</h1>
                            <p class="text-justify p-2">
                                Somos uma empresa focada no ramo da informática, ofecemos diversos tipos de serviços,
                                tanto na manuntenção ou ate na montagem de seu computador. Atuamos há mais de 10 anos no
                                mercado. Nosso estoque tem uma variedade de produto do LowEnd ate o HighEnd.
                            </p>
                        </section>
                    </section>

                    <section class="grid grid-cols-2 mt-4 ">
                        <section>
                            <section class="flex flex-wrap">
                                <h1 class=" w-full font-semibold text-2xl">Serviços</h1>
                                <p class="p-2">
                                <ul class="list-disc list-outside p-2 text-1xl">
                                    <li>Manutenção em computadores</li>
                                    <li>Montagem e melhoria de peças</li>
                                    <li>Helper Assembly</li>
                                </ul>
                                </p>
                            </section>
                        </section>

                        <section>
                            <img src="{{ asset('img/profissional.jpg') }}" alt="">
                        </section>
                    </section>

                    <section class="w-full mt-4">
                        <h1 class="font-semibold text-2xl px-2">Estamos localizados aqui</h1>
                        <p class="p-2">
                            Praça Bernardino de Lima, 80 - Centro, Nova Lima - MG, 34000-970
                        </p>
                        <iframe class="w-full h-[500px]" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=pt_br&amp;q=Pra%C3%A7a%20Bernardino%20de%20Lima,%2080%20-%20Centro,%20Nova%20Lima%20-%20MG,%2034000-970+(Boom%20Tech)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.gps.ie/">gps devices</a></iframe>
                    </section> --}}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
