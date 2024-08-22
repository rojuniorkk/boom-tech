<x-app-layout>

    <x-slot name="pagename">Carrinho</x-slot>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Finalização de pedido') }}
        </h2>
    </x-slot>


    <div class="py-12 ">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (\Cart::getContent()->count() > 0)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex flex-col">
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex flex-col items-center">
                        <span class="material-symbols-outlined text-8xl space-y-2">sentiment_sad</span>
                        <h1 class="text-3xl">Nenhum pedido encontrado..</h1>
                        <h4 class="text-lg">Vamos as compras?
                            <a class="hover:underline text-emerald-700 hover:text-emerald-900"
                                href="{{ route('website.index') }}">Produtos</a>
                        </h4>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
