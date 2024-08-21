<footer class="bg-white ">
    <div class="mx-auto w-full max-w-screen-3xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between p-4">
            <div class="mb-6 md:mb-0 max-w-2xl">
                <a href="{{ route('website.index') }}" class="flex items-center">
                    <x-application-logo class="block h-10 mr-3 w-auto fill-current text-gray-800" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Boom Tech</span>
                </a>
                <p class="text-justify p-3 text-gray-500 ">
                    Somos uma empresa focada no ramo da informática, ofecemos diversos tipos de serviços, tanto na
                    manuntenção ou ate na montagem de seu computador. Atuamos há mais de 10 anos no mercado. Nosso
                    estoque tem uma variedade de produto do LowEnd ate o HighEnd
                </p>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Acesso Rápido</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Seu carrinho</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Perfil</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Pedidos</a>
                        </li>

                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Redes sociais</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">LinkeDin</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Termos</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Politica e Privacidade</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Termos &amp; Condições</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="{{ route('website.index') }}"
                    class="hover:underline">BoomTech™</a>. Todos os direitos reservados.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
            </div>
        </div>
    </div>
</footer>
