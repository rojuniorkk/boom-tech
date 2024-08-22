<x-app-layout>

    <x-slot name="pagename">Pedidos</x-slot>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seus pedidos') }}
        </h2>
    </x-slot>


    <div class="py-12 ">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if ($checkouts->count() > 0)
                <div class="overflow-hidden">
                    <div class="p-6 text-gray-900">
                        <div class="flex flex-col gap-4">

                            @foreach ($checkouts as $checkout)
                                @php

                                    $checkout_list = $checkout->list();

                                @endphp

                                <div class="flex hover:scale-[1.035] transition duration-300 w-full flex-row p-4 border rounded text-gray-500 bg-white shadow-lg ">
                                    <div class="flex flex-col gap-y-4">
                                        <div class="flex ">
                                            <div class="text-md">
                                                <h1 class="font-semibold">Status | <span>{{ $checkout->created_at }}</span></h1>
                                                <p class="px-2">{{ ucwords($checkout->status) }}</p>
                                            </div>
                                        </div>


                                        <div class="flex flex-col gap-2">
                                            <div class="text-md">
                                                <h1 class="font-semibold">Endereço</h1>
                                                <p class="px-2">{{ $checkout->address }}</p>
                                            </div>
                                            <div class="text-md">
                                                <h1 class="font-semibold">Tipo de pagamento</h1>
                                                <p class="px-2">{{ $checkout->payment }}</p>
                                            </div>
                                            <div class="text-md">
                                                <h1 class="font-semibold">Produtos - R$
                                                    {{ number_format($checkout->total, 2, ',', '.') }}</h1>
                                                <ul class="list-disc list-inside">

                                                    @foreach ($checkout_list as $item)
                                                        @php
                                                            $product = $item->product();
                                                        @endphp

                                                        <li>
                                                            <span><a class="hover:underline text-emerald-700 hover:text-emerald-900"
                                                                    href="{{ route('product.show', ['id' => $product->id, 'slug' => $product->slug]) }}">{{ $product->name }}</a></span>
                                                            -
                                                            <span>R$
                                                                {{ number_format($product->price, 2, ',', '.') }}</span>
                                                            -
                                                            x<span>{{ $item->quantity }}</span>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex flex-col items-center">

                        <div class="w-16 h-16">
                            <x-application-logo></x-application-logo>
                        </div>

                        <h1 class="text-3xl">Nenhum pedido encontrado..</h1>
                        <h4 class="text-lg">
                            <a class="hover:underline text-emerald-700 hover:text-emerald-900"
                                href="{{ route('cart.index') }}">Seu Carrinho</a>
                            <span>/</span>
                            <a class="hover:underline text-emerald-700 hover:text-emerald-900"
                                href="{{ route('website.index') }}">Produtos</a>
                        </h4>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
