<x-app-layout>

    <x-slot name="pagename">Carrinho</x-slot>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seu carrinho') }}
        </h2>
    </x-slot>


    <div class="py-12 ">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (\Cart::getContent()->count() > 0)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex justify-between">
                        <span class="text-2xl"> R$ {{ number_format(\Cart::getTotal(), 2, ',', '.') }}</span>
                        <button
                            class="bg-emerald-800 hover:bg-emerald-900 hover:scale-[1.05] transition duration-300 ease-in-out text-white font-bold py-2 px-4 rounded">Finalizar
                            Compra</button>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class="flex flex-col">
                            @foreach (\Cart::getContent() as $item)
                                @php
                                    $product = $item->associatedModel;
                                @endphp

                                <div class="flex justify-between mt-4">
                                    <div class="flex">
                                        <div>
                                            <a
                                                href="{{ route('product.show', ['id' => $product->id, 'slug' => $product->slug]) }}">
                                                <img class="max-w-20 rounded" src="{{ $product->image }}"
                                                    alt="{{ $product->slug }}">
                                            </a>

                                        </div>
                                        <div class="ml-4 flex flex-col">
                                            <h1 class="text-xl">{{ $product->name }}</h1>
                                            <h4 class="text-md">R$ {{ number_format($product->price, 2, ',', '.') }}
                                            </h4>
                                        </div>
                                    </div>

                                    <form action="{{ route('cart.edit') }}" method="post"
                                        enctype="multipart/form-data">

                                        <div class="flex flex-col">
                                            <div class="flex justify-end ">
                                                <button type="submit" name="action" value="update">
                                                    <span class=" material-symbols-outlined hover:text-yellow-500 ">
                                                        save
                                                    </span>
                                                </button>
                                                <button type="submit" name="action" value="remove">
                                                    <span
                                                        class="material-symbols-outlined hover:text-red-500 transition duration-300 ease-in-out">delete</span>
                                                </button>
                                            </div>

                                            <div>

                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input
                                                    class="appearance-none border border-gray-300 rounded-md shadow-sm"
                                                    type="number" name="quantity" value="{{ $item->quantity }}"
                                                    min="1" max="999">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            @else
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex flex-col items-center">
                        <span class="material-symbols-outlined text-8xl space-y-2">sentiment_sad</span>
                        <h1 class="text-3xl">Carrinho Vazio...</h1>
                        <h4 class="text-lg">Que tal adicionar algo?
                            <a class="hover:underline text-emerald-700 hover:text-emerald-900" href="{{ route('website.index') }}">Produtos</a>
                        </h4>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
